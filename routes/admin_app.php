<?php

/**
 * Home
 */
Route::namespace('Admin')->group(function(){
    Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
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
        Route::get('doctors/{doctor}/patients/list', 'DoctorPatientAjaxController@index');
    });