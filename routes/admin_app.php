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
Route::name('admin.')->namespace('Doctor')
    ->group(function(){
        Route::get('doctors/list', 'DoctorAjaxController@index');
        // Route::delete('doctors/{doctor?}', 'DoctorController@destroy')
        //     ->name('doctors.destroy');
        Route::resource('doctors', 'DoctorController')
            ->except('destroy');
    });