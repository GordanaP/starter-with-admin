<?php

/**
 * Home
 */
Route::namespace('Admin')->group(function(){
    Route::get('/', 'HomeController@index')->name('admin.index');
});

/**
 * Layouts
 */
Route::prefix('pages/layouts')->as('admin.layouts.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/boxed', 'LayoutController@boxed')->name('boxed');
        Route::get('/sidebar-compact', 'LayoutController@sidebar_compact')->name('sidebar_compact');
        Route::get('/sidebar-icon', 'LayoutController@sidebar_icon')->name('sidebar_icon');
        Route::get('/sidebar-hidden', 'LayoutController@sidebar_hidden')->name('sidebar_hidden');
        Route::get('/sidebar-overlay', 'LayoutController@sidebar_overlay')->name('sidebar_overlay');
        Route::get('/sidebar-fixed', 'LayoutController@sidebar_fixed')->name('sidebar_fixed');
    });

/**
 * Apps
 */
Route::prefix('pages/apps')->as('admin.apps.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/calendar', 'AppController@calendar')->name('calendar');
        Route::get('/chats', 'AppController@chats')->name('chats');
        Route::get('/email', 'AppController@email')->name('email');
        Route::get('/gallery', 'AppController@gallery')->name('gallery');
        Route::get('/kanban-board', 'AppController@kanban')->name('kanban');
        Route::get('/tickets', 'AppController@tickets')->name('tickets');
        Route::get('/todo-list', 'AppController@todo')->name('todo');
    });

/**
 * Samples
 */
Route::prefix('pages/samples')->as('admin.samples.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/blank-page', 'SampleController@blank_page')->name('blank_page');
        Route::get('/email-templates', 'SampleController@email_templates')->name('email_templates');
        Route::get('/error-404', 'SampleController@error_404')->name('error_404');
        Route::get('/error-500', 'SampleController@error_500')->name('error_500');
        Route::get('/faq', 'SampleController@faq')->name('faq');
        Route::get('/faq-2', 'SampleController@faq_2')->name('faq_2');
        Route::get('/invoice', 'SampleController@invoice')->name('invoice');
        Route::get('/landing-page', 'SampleController@landing_page')->name('landing_page');
        Route::get('/lock-screen', 'SampleController@lockscreen')->name('lockscreen');
        Route::get('/login', 'SampleController@login')->name('login');
        Route::get('/login-2', 'SampleController@login_2')->name('login_2');
        Route::get('/multi-level-login', 'SampleController@multilevel_login')->name('multilevel_login');
        Route::get('/news-grid', 'SampleController@news_grid')->name('news_grid');
        Route::get('/orders', 'SampleController@orders')->name('orders');
        Route::get('/portfolio', 'SampleController@portfolio')->name('portfolio');
        Route::get('/pricing-table', 'SampleController@pricing_table')->name('pricing_table');
        Route::get('/product-catalogue', 'SampleController@product_catalogue')->name('product_catalogue');
        Route::get('/project-list', 'SampleController@project_list')->name('project_list');
        Route::get('/profile', 'SampleController@profile')->name('profile');
        Route::get('/register', 'SampleController@register')->name('register');
        Route::get('/register-2', 'SampleController@register_2')->name('register_2');
        Route::get('/search-results', 'SampleController@search_results')->name('search_results');
        Route::get('/widgets', 'SampleController@widgets')->name('widgets');
        Route::get('/timeline', 'SampleController@timeline')->name('timeline');
        Route::get('/user-listing', 'SampleController@user_listing')->name('user_listing');
    });

/**
 * Ui-features
 */
Route::prefix('pages/ui-features')->as('admin.ui-features.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/accordions', 'UiFeatureController@accordions')->name('accordions');
        Route::get('/badges', 'UiFeatureController@badges')->name('badges');
        Route::get('/breadcrumbs', 'UiFeatureController@breadcrumbs')->name('breadcrumbs');
        Route::get('/buttons', 'UiFeatureController@buttons')->name('buttons');
        Route::get('/dropdowns', 'UiFeatureController@dropdowns')->name('dropdowns');
        Route::get('/modals', 'UiFeatureController@modals')->name('modals');
        Route::get('/notifications', 'UiFeatureController@notifications')->name('notifications');
        Route::get('/progress', 'UiFeatureController@progress')->name('progress');
        Route::get('/pagination', 'UiFeatureController@pagination')->name('pagination');
        Route::get('/popups', 'UiFeatureController@popups')->name('popups');
        Route::get('/tabs', 'UiFeatureController@tabs')->name('tabs');
        Route::get('/tooltips', 'UiFeatureController@tooltips')->name('tooltips');
        Route::get('/typography', 'UiFeatureController@typography')->name('typography');
        Route::get('/carousel', 'UiFeatureController@carousel')->name('carousel');
        Route::get('/clipboard', 'UiFeatureController@clipboard')->name('clipboard');
        Route::get('/colcade', 'UiFeatureController@colcade')->name('colcade');
        Route::get('/context-menu', 'UiFeatureController@context_menu')->name('context_menu');
        Route::get('/dragula', 'UiFeatureController@dragula')->name('dragula');
        Route::get('/loaders', 'UiFeatureController@loaders')->name('loaders');
        Route::get('/slider', 'UiFeatureController@slider')->name('slider');
        Route::get('/treeview', 'UiFeatureController@treeview')->name('treeview');
    });

/**
 * Icons
 */
Route::prefix('pages/icons')->as('admin.icons.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/flag-icons', 'IconController@flag')->name('flag');
        Route::get('/font-awesome', 'IconController@font_awesome')->name('font_awesome');
        Route::get('/material-design-icons', 'IconController@mdi')->name('mdi');
        Route::get('/simple-line-icons', 'IconController@simple_line')->name('simple_line');
        Route::get('/themify-icons', 'IconController@themify')->name('themify');
    });

/**
 * Forms
 */
Route::prefix('pages/forms')->as('admin.forms.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/advanced', 'FormController@advanced')->name('advanced');
        Route::get('/basic', 'FormController@basic')->name('basic');
        Route::get('/code-editors', 'FormController@code_editors')->name('code_editors');
        Route::get('/text-editors', 'FormController@text_editors')->name('text_editors');
        Route::get('/validation', 'FormController@validation')->name('validation');
        Route::get('/wizard', 'FormController@wizard')->name('wizard');
    });

/**
 * Charts
 */
Route::prefix('pages/charts')->as('admin.charts.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/c3', 'ChartController@c3')->name('C3');
        Route::get('/chartist', 'ChartController@chartist')->name('chartist');
        Route::get('/chartJs', 'ChartController@chartJs')->name('chartJs');
        Route::get('/flot', 'ChartController@flot')->name('flot');
        Route::get('/google', 'ChartController@google')->name('google');
        Route::get('/justgage', 'ChartController@justgage')->name('justgage');
        Route::get('/morris', 'ChartController@morris')->name('morris');
        Route::get('/sparkline', 'ChartController@sparkline')->name('sparkline');
    });

/**
 * Tables
 */
Route::prefix('pages/tables')->as('admin.tables.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/basic', 'TableController@basic')->name('basic');
        Route::get('/datatable', 'TableController@datatable')->name('datatable');
        Route::get('/js-grid', 'TableController@js_grid')->name('js_grid');
        Route::get('/sortable', 'TableController@sortable')->name('sortable');
    });

/**
 * Maps
 */
Route::prefix('pages/maps')->as('admin.maps.')->namespace('Admin\Pages')
    ->group(function(){
        Route::get('/google', 'MapController@google')->name('google');
        Route::get('/mapael', 'MapController@mapael')->name('mapael');
        Route::get('/vector', 'MapController@vector')->name('vector');
    });