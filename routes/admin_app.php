<?php

/**
 * Home
 */
Route::namespace('Admin')->group(function(){
    Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
});

/**
 * Appointment
 */
Route::namespace('Appointment')
    ->group(function(){
        Route::get('appointments/list', 'AppointmentAjaxController@index')
            ->name('admin.appointments.list');
        Route::delete('appointments/{appointment?}', 'AppointmentController@destroy')
            ->name('admin.appointments.destroy');
        Route::name('admin')->resource('appointments', 'AppointmentController')
            ->except('destroy');
    });

/**
 * Patient
 */
Route::namespace('Patient')
    ->group(function(){
        Route::get('patients/list', 'PatientAjaxController@index');
        Route::delete('patients/{patient?}', 'PatientController@destroy')
            ->name('admin.patients.destroy');
        Route::name('admin')->resource('patients', 'PatientController')
            ->except('destroy');
    });

/**
 * Doctor
 */
Route::namespace('Doctor')
    ->group(function(){
        Route::get('doctors/list', 'DoctorAjaxController@index');
        Route::delete('doctors/{doctor?}', 'DoctorController@destroy')
            ->name('admin.doctors.destroy');
        Route::name('admin')->resource('doctors', 'DoctorController')
            ->except('destroy');
        Route::name('admin')->resource('doctors.patients', 'DoctorPatientController')
            ->only('create');
        Route::name('admin')->resource('doctors.appointments', 'DoctorAppointmentController')
            ->only('create', 'store');
        Route::get('doctors/{doctor}/patients/list', 'DoctorPatientAjaxController@index');
    });