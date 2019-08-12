<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    
    // users routes

    Route::resource('user', 'UsersController');

    Route::get('user/profile/{id}', 'UsersController@profile')->name('user.profile');

    Route::get('user/index/inspector', 'UsersController@inspector')->name('user.inspector');

    Route::middleware(['student'])->group(function () {
        Route::get('appointments/{university}/select', 'AppointmentController@select')->name('appointments.select');
        Route::get('appointments/{university}/cancel', 'AppointmentController@cancel')->name('appointments.cancel');
        Route::get('appointments/{appointment}/accepted', 'AppointmentController@accepted')->name('appointments.accepted');
    });

    
    // universities routes
    
    Route::resource('university', 'UniversitiesController');

    // Route::get('university/oldedit/{id}', function ($id) {
    //     $user = App\User::find($id);
    //     return view('universities.old', compact('user'));
    // })->name('university.oldedit');
    
    Route::get('university/index/active', 'UniversitiesController@active')->name('university.active');
    
    Route::get('university/index/disable', 'UniversitiesController@disable')->name('university.disable');
    
    Route::get('university/students', 'UniversitiesController@studentList')->name('university.student');
    
    Route::get('university/profile/{id}', 'UniversitiesController@profile')->name('university.profile');
    
    Route::get('university/student/list', 'UsersController@studentsList')->name('university.studentList');

    Route::get('university/{university}/students', 'UniversitiesController@studentListByUniversity')->name('university.students');
    Route::get('university/{university}/appointments', 'UniversitiesController@appointments')->name('university.appointments');

    Route::resource('appointments', 'AppointmentController');
});
