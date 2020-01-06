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
    Route::get('/forms/basic', 'PageFormController@basic')->name('admin.forms.basic');
    Route::get('/forms/advanced', 'PageFormController@advanced')->name('admin.forms.advanced');
    Route::get('/forms/validation', 'PageFormController@validation')->name('admin.forms.validation');
    Route::get('/forms/wizard', 'PageFormController@wizard')->name('admin.forms.wizard');
});

