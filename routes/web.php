<?php

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
});

Route::prefix('admin/pages/layouts')->as('admin.layouts.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/boxed', 'LayoutController@boxed')->name('boxed');
        Route::get('/sidebar-compact', 'LayoutController@sidebar_compact')->name('sidebar_compact');
        Route::get('/sidebar-icon', 'LayoutController@sidebar_icon')->name('sidebar_icon');
        Route::get('/sidebar-hidden', 'LayoutController@sidebar_hidden')->name('sidebar_hidden');
        Route::get('/sidebar-overlay', 'LayoutController@sidebar_overlay')->name('sidebar_overlay');
        Route::get('/sidebar-fixed', 'LayoutController@sidebar_fixed')->name('sidebar_fixed');
    });

Route::prefix('admin/pages/apps')->as('admin.apps.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/calendar', 'AppController@calendar')->name('calendar');
        Route::get('/chats', 'AppController@chats')->name('chats');
        Route::get('/email', 'AppController@email')->name('email');
        Route::get('/gallery', 'AppController@gallery')->name('gallery');
        Route::get('/kanban-board', 'AppController@kanban')->name('kanban');
        Route::get('/tickets', 'AppController@tickets')->name('tickets');
        Route::get('/todo-list', 'AppController@todo')->name('todo');
    });

Route::prefix('admin/pages/samples')->as('admin.samples.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/widgets', 'SampleController@widgets')->name('widgets');
    });

Route::prefix('admin/pages/ui-features')->as('admin.ui-features.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/accordions', 'UiFeatureController@accordions')->name('accordions');
        Route::get('/badges', 'UiFeatureController@badges')->name('badges');
        Route::get('/breadcrumbs', 'UiFeatureController@breadcrumbs')->name('breadcrumbs');
        Route::get('/buttons', 'UiFeatureController@buttons')->name('buttons');
        Route::get('/dropdowns', 'UiFeatureController@dropdowns')->name('dropdowns');
        Route::get('/modals', 'UiFeatureController@modals')->name('modals');
        Route::get('/progress', 'UiFeatureController@progress')->name('progress');
        Route::get('/pagination', 'UiFeatureController@pagination')->name('pagination');
        Route::get('/tabs', 'UiFeatureController@tabs')->name('tabs');
        Route::get('/tooltips', 'UiFeatureController@tooltips')->name('tooltips');
        Route::get('/typography', 'UiFeatureController@typography')->name('typography');
    });
