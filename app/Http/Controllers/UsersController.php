<?php

namespace App\Http\Controllers;

use App\User;
use App\File;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'student')->get();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'status' => ['sometimes'],
            'first_name' => ['sometimes', 'string', 'max:100'],
            'last_name' => ['sometimes', 'string', 'max:100'],
            'dni_type' => ['sometimes', 'string'],
            'dni' => ['sometimes', 'string', 'max:20', 'unique:users'],
            'mobile_phone' => ['sometimes', 'string', 'min:11', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'max:20', 'confirmed'],
            ]);
        User::create([
            'role' => $request['role'],
            'status' => $request['status'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'dni_type' => $request['dni_type'],
            'dni' => $request['dni'],
            'mobile_phone' => $request['mobile_phone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $universities = User::where('role', 'university')->where('status', '1')->get();
//        dd($universities);
        return view('users.edit', compact('user', 'countries', 'universities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [

            'role' => 'sometimes',
            'status' => 'sometimes',
            'first_name' => 'sometimes|max:100',
            'last_name' => 'sometimes|max:100',
            'dni_type' => 'sometimes',
            'email'=>'sometimes',
            'dni' => 'sometimes',
            'mobile_phone' => 'sometimes|max:15',
            'password' => 'nullable|string|min:6|max:20|confirmed',
    
            // Personal
    
            'gender' => 'sometimes',
            'birth_date' => 'sometimes',
            'nationality' => 'sometimes|max:100',
            'country' =>'sometimes',
            'city' => 'sometimes|max:100',
            'home_phone' => 'sometimes|max:15',
            'office_phone' => 'sometimes|max:15',
            'alt_email' => 'sometimes|max:100',
    
            // Laboring
    
            'years_labo' => 'sometimes',
            'employeer' => 'sometimes|max:100',
            'function' => 'sometimes|max:100',
            'industry' => 'sometimes|max:100',
            'alt_industry' => 'sometimes|max:100',
            'job_title' => 'sometimes|max:100',
    
            // Studies
    
            'university' => 'sometimes|max:100',
            'career' => 'sometimes|max:100',
            'gpa' => 'sometimes',
            'date_grade' => 'sometimes',
            'grade_honour' => 'sometimes',
            'post_university' => 'sometimes|max:100',
            'postgrade_degree' => 'sometimes',
            'postgrade_date' => 'sometimes',
            'postgrade_specialization' => 'sometimes|max:100',
            'post_gpa' => 'sometimes',
            'post_honour' => 'sometimes',
    
            // Test
    
            'mba_date' => 'sometimes',
            'gmat_confirmation' => 'sometimes',
            'gmat_month' => 'sometimes',
            'gmat_global_score' => 'sometimes',
            'gmat_global_percent' => 'sometimes',
            'gmat_essay_score' => 'sometimes',
            'gmat_essay_percent' => 'sometimes',
            'gmat_verbal_score' => 'sometimes',
            'gmat_verbal_percent' => 'sometimes',
            'gmat_math_score' => 'sometimes',
            'gmat_math_percent' => 'sometimes',
            'gmat_reasoning_score' => 'sometimes',
            'gmat_reasoning_percent' => 'sometimes',
            'gre_confirmation' => 'sometimes',
            'gre_month' => 'sometimes',
            'gre_global_score' => 'sometimes',
            'gre_global_percent' => 'sometimes',
            'gre_essay_score' => 'sometimes',
            'gre_essay_percent' => 'sometimes',
            'gre_verbal_score' => 'sometimes',
            'gre_verbal_percent' => 'sometimes',
            'gre_math_score' => 'sometimes',
            'gre_math_percent' => 'sometimes',
            'gre_reasoning_score' => 'sometimes',
            'gre_reasoning_percent' => 'sometimes',
            'toefl_score' => 'sometimes',
            'ielts_score' => 'sometimes',
    
            // MBA
            
            'mba_type' => 'sometimes',
            'mba_duration' => 'sometimes',

            // CV & Notes

            'cv' => 'sometimes|mimes:pdf' ,
            'image' => 'sometimes|mimes:png,jpg,gif' ,
            'notes' => 'sometimes|max:1000',
          'uni_choice' =>'nullable'
        ]);

        if (!empty($request->uni_choice)) {
            $choice= implode($request->uni_choice, ',');
            $data['uni_choice'] =$choice;
        }

        if ($request->hasFile('cv')) {
            $pdf = $request->file('cv');
            $cv_name = time() . $pdf->getClientOriginalName();
            $pdf->move(public_path() . '/files/', $cv_name);
            $data['cv'] = $cv_name;
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/files/', $image_name);

            $file = new File;

            $file->original = $image->getClientOriginalName();
            $file->type = 'image';
            $file->file = '/files/'.$image_name;
            $file->user()->associate($id);
            $file->save();
        }

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        User::findOrFail($id)->update($data);
        if (Auth::user()->role === 'admin') {
            flash('exito')->important();
            return redirect()->route('user.index');
        } elseif (Auth::user()->role === 'student') {
            flash('exito')->important();
            return redirect()->route('user.profile', compact('id'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index');
    }

    public function profile(User $user, $id)
    {

      $u = User::findOrFail($id);
      $uni = explode(',',$u);
        return view('users.session.profile', compact('user','uni'));
    }
    public function inspector()
    {
        $users = User::where('role', 'inspector')->orderBy('id', 'ASC')->get();
        return view('users.inspector', compact('users'));
    }
    public function universities()
    {
        $users = User::orderBy('id', 'ASC')->get();
        return view('universities.index', compact('users'));
    }
    public function studentsList()
    {   
        $a = auth()->user()->first_name;
        $users = User::where([
            ['role', 'student'],
            ['status', true]
        ])->where('uni_choice','LIKE', '%'. $a.'%')
        ->limit(21)
        ->get();
        return view('universities.students.index', compact('users'));
    }
}
