<?php

namespace App\Http\Controllers;

use Flash;
use App\User;
use Carbon\Carbon;
use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    public function create(Request $request)
    {
        $id = auth()->user()->id;

        if (auth()->user()->role == 'admin') {
            $id = $request->get('university');
        }

    	$student = User::find($request->get('student'));
    	$studentEvent = Appointment::where([
	    		['user_id', $student->id],
	    		['university_id', $id]
	    	])
            ->whereNotIn('status', ['rejected', 'expired'])
            ->get();

    	$studentEvent = $this->formatEvent($studentEvent);

        $vars = compact('student', 'studentEvent');

        if (auth()->user()->role == 'admin') {
            $vars['university'] = User::find($request->get('university'));
        }

    	return view('appointments.create')->with($vars);
    }

    public function store(Request $request)
    {
        $appointments = [];

        $id = auth()->user()->id;

        if (auth()->user()->role == 'admin') {
            $id = $request->all()[0]['university_id'];
        }

    	$countAppointment = Appointment::where([
                ['university_id', $id],
                ['status', '!=', 'rejected'],
                ['status', '!=', 'expired']
            ])
    		->groupBy('user_id')
    		->get();

    	if ($countAppointment->count() >= env('APPOINTMENT_NUMBER')) {
    		return response()->json([
	    		'success' => true,
	    		'message' => 'Has exhausted the quotas to assign appointments',
	    	], 200);
    	}

        foreach ($request->all() as $data) {
            $existAppointment = Appointment::where([
                ['university_id', $id],
                ['status', '!=', 'rejected'],
                ['status', '!=', 'expired'],
            ])
            ->whereBetween('date', [Carbon::createFromFormat('Y-m-d G:i:s', $data['date']), Carbon::createFromFormat('Y-m-d G:i:s', $data['date'])->addHour()])
            ->get();

            if ($existAppointment->count() > 0) {
                return response()->json([
                    'success' => true,
                    'message' => 'There is already an appointment scheduled for the date: '.$data['date'],
                ], 200);
            }
        }

    	foreach ($request->all() as $data) {
	    	$appointment = new Appointment;

	    	$appointment->date = Carbon::createFromFormat('Y-m-d G:i:s', $data['date']);
	    	$appointment->university()->associate($id);
	    	$appointment->user()->associate($data['user_id']);
	    	$appointment->save();

            $appointments[] = $appointment;
    	}

        $user = User::find($data['user_id']);
        $user->notify(new \App\Notifications\AppointmentNotify($appointments));

        return response()->json([
            'success' => true,
            'message' => 'Appointments created successfully',
        ], 200);
    }

    public function cancel($university)
    {
        $university = User::find($university);
        $studentEvent = Appointment::where([
                ['status', 'assigned'],
                ['user_id', auth()->user()->id],
                ['university_id', $university->id]
            ])->get();

        $studentEvent->each(function ($event) {
            $event->status = 'rejected';
            $event->save();
        });

        Flash::error('You have rejected all options')->important();
        return redirect()->route('user.profile', auth()->user()->id);
    }

    public function select($university)
    {
        $university = User::find($university);
        $studentEvent = Appointment::where([
                ['status', 'assigned'],
                ['user_id', auth()->user()->id],
                ['university_id', $university->id]
            ])->get();

        return view('users.appointment-select')->with(compact('studentEvent'));
    }

    public function accepted(Appointment $appointment)
    {
        $appointment->status = 'accepted';
        $appointment->save();

        $rejectedAppointments = Appointment::where([
                ['status', 'assigned'],
                ['user_id', auth()->user()->id],
                ['university_id', $appointment->university->id]
            ])->get();

        $rejectedAppointments->each(function ($event) {
            $event->status = 'rejected';
            $event->save();
        });

        Flash::success('You have accepted the appointment correctly')->important();
        return redirect()->route('user.profile', auth()->user()->id);
    }

    private function formatEvent($studentEvent)
    {
    	$studentEventFormat = $studentEvent->map(function ($event) {
    		$event->load('user');

            $title = !empty($event->user) ? $event->user->dni.' - '.$event->user->first_name : '';

    		return [
    			'title' => 'Option for '.$title,
    			'start' => $event->date->format('Y-m-d H:i:s'),
    			'end' => $event->date->addHour()->format('Y-m-d H:i:s')
    		];
    	});

    	return json_encode($studentEventFormat);
    }
}
