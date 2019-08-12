<?php

namespace App\Http\Controllers;

use App\User;
use App\Appointment;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;

use CountryState;

class UniversitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'university')->orderBy('id', 'ASC')->get();
        return view('universities.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('universities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:200'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:20'],
        ]);
        User::create([
            'role' => $request['role'],
            'status' => $request['status'],
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),            
        ]);
        return redirect()->route('university.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Universities  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        // return view('users.show', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $countries = CountryState::getCountries();
        $states = CountryState::getStates('US');
        $universities = User::where('role', 'university')->where('status', '1')->orderBy('id', 'ASC')->paginate(10);
        return view('universities.edit', compact('user', 'countries', 'states', 'universities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $data = $this->validate($request, [

            // University Information

            'status' => 'sometimes' ,
            'event' => 'sometimes' ,
            'first_name' => 'sometimes|max:200' ,
            'last_name' => 'sometimes|max:200' ,
            'country' => 'sometimes|max:200' ,
            'city' => 'sometimes|max:200' ,
            'website' => 'sometimes|max:200',
            'email'=> 'sometimes',
            'password' => 'nullable|string|min:6|max:20|confirmed',

            // Representative Attending

            'representative_first_name' => 'sometimes|max:200' ,
            'representative_family_name' => 'sometimes|max:200' ,
            'representative_email' => 'sometimes|max:200' ,
            'representative_mobile_phone' => 'sometimes|max:15' ,
            'representative_home_phone' => 'sometimes|max:15' ,
            'representative_whatsapp_phone' => 'sometimes|max:15' ,
            
            // Contact Person

            'contact_first_name' => 'sometimes|max:100' ,
            'contact_family_name' => 'sometimes|max:100' ,
            'contact_email' => 'sometimes|max:200' ,
            'contact_mobile_phone' => 'sometimes|max:15' ,
            'contact_home_phone' => 'sometimes|max:15' ,
            'contact_whatsapp_phone' => 'sometimes|max:15' ,

            // Cultura Activity

            'sao_paulo_panel' => 'sometimes',
            'bogota_panel' => 'sometimes',
            'cultural_tour' => 'sometimes',

            // Additional Info

            'description_mba_programs' => 'sometimes|max:2000' ,
            'programs_type' => 'sometimes|max:200' ,
            'class_profile_mba' => 'sometimes|max:1000' ,
            'join_degrees_offered' => 'sometimes|max:1000' ,
            'specialized_masters' => 'sometimes|max:1000' ,
            'specialization_concentration' => 'sometimes|max:1000' ,

            'program_duration' => 'sometimes' ,
            'tuition_fees' => 'sometimes' ,
            'tuition_type' => 'sometimes' ,
            'minimun_experience' => 'sometimes' ,
            'students_employed' => 'sometimes' ,
            'languare_required' => 'sometimes|max:100' ,
            'ability_loans' => 'sometimes|max:3000' ,
            'financial_aid' => 'sometimes|max:3000' ,
            'facebook_post' => 'sometimes|max:3000' ,
            'business_logo' => 'sometimes|dimensions:max_width=220,max_height=160',
            
            'university_notes' => 'sometimes|max:500',
        ]);
        if ($request->hasFile('business_logo')) {
            $type = $request->file('business_logo');
            $logo_name = time() . $type->getClientOriginalName();
            $type->move(public_path() . '/files/', $logo_name);
            $data['business_logo'] = $logo_name;
        }

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        User::findOrFail($id)->update($data);

        if (Auth::user()->role === 'admin') 
        {
            return redirect()->route('university.index');

        } elseif (Auth::user()->role === 'university') 
        {
            return redirect()->route('university.profile', compact('id'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('university.index');
    }
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('universities.session.profile', compact('user'));
    }
    public function active()
    {
        $users = User::where('role', 'university')->where('status', '1')->orderBy('id', 'ASC')->paginate(10);
        return view('universities.index.active', compact('users'));
    }
    public function disable()
    {
        $users = User::where('role', 'university')->where('status', '0')->orderBy('id', 'ASC')->paginate(10);
        return view('universities.index.disable', compact('users'));
    }
    public function studentList()
    {
        $users = User::orderBy('dni', 'ASC')->paginate(100);
        return view('universities.students.index', compact('users'));
    }

    public function getActiveUniversitiesToUserProfile()
    {
        $users = User::where('role', 'university')->where('status', '1')->orderBy('id', 'ASC')->paginate(10);
        return view('universities.index.active', compact('users'));
    }

    public function studentListByUniversity(User $university)
    {
        $users = User::where('role', 'student')->where([
            ['uni_choice','LIKE', '%'. $university->first_name.'%'],
            ['status', true]
        ])->limit(21)->get();
        
        return view('universities.students.index', compact('users', 'university'));
    }

    public function appointments(User $university)
    {
        $events = Appointment::where('university_id', $university->id)
            ->whereNotIn('status', ['rejected', 'expired'])
            ->get();

        $events = $events->count() > 0 ? $this->formatEvent($events) : json_encode([]);

        return view('universities.appointments.index')->with(compact('events'));
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
