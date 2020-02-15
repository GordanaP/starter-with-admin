<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('test', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

