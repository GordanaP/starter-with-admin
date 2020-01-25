<?php

/**
 * Home
 */
Route::namespace('Admin')->group(function(){
    Route::get('/dashboard', 'HomeController@dashboard')->name('admin.dashboard');
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
    });