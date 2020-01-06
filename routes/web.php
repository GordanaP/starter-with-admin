<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('admin.dashboard');
    Route::get('/tables/basic', 'PageTableController@basic')->name('admin.tables.basic');
    Route::get('/tables/datatable', 'PageTableController@datatable')->name('admin.tables.datatable');
    Route::get('/tables/js_grid', 'PageTableController@js_grid')->name('admin.tables.js_grid');
    Route::get('/tables/sortable', 'PageTableController@sortable')->name('admin.tables.sortable');
});

