<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('admin.dashboard');
});

