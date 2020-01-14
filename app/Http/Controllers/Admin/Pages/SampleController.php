<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    /**
     * Show the admin blank page.
     *
     * @return \Illuminate\Support\Response
     */
    public function blank_page()
    {
        return view('admin.pages.samples.blank_page');
    }

    /**
     * Show the admin email templates.
     *
     * @return \Illuminate\Support\Response
     */
    public function email_templates()
    {
        return view('admin.pages.samples.email_templates');
    }

    /**
     * Show the admin error 404 page.
     *
     * @return \Illuminate\Support\Response
     */
    public function error_404()
    {
        return view('admin.pages.samples.error_404');
    }

    /**
     * Show the admin error 500 page.
     *
     * @return \Illuminate\Support\Response
     */
    public function error_500()
    {
        return view('admin.pages.samples.error_500');
    }

    /**
     * Show the admin faq.
     *
     * @return \Illuminate\Support\Response
     */
    public function faq()
    {
        return view('admin.pages.samples.faq');
    }

    /**
     * Show the admin faq 2.
     *
     * @return \Illuminate\Support\Response
     */
    public function faq_2()
    {
        return view('admin.pages.samples.faq_2');
    }

    /**
     * Show the admin invoice.
     *
     * @return \Illuminate\Support\Response
     */
    public function invoice()
    {
        return view('admin.pages.samples.invoice');
    }

    /**
     * Show the admin landing page.
     *
     * @return \Illuminate\Support\Response
     */
    public function landing_page()
    {
        return view('admin.pages.samples.landing_page');
    }

    /**
     * Show the admin lockscreen page.
     *
     * @return \Illuminate\Support\Response
     */
    public function lockscreen()
    {
        return view('admin.pages.samples.lockscreen');
    }

    /**
     * Show the admin login page.
     *
     * @return \Illuminate\Support\Response
     */
    public function login()
    {
        return view('admin.pages.samples.login');
    }

    /**
     * Show the admin login 2 page.
     *
     * @return \Illuminate\Support\Response
     */
    public function login_2()
    {
        return view('admin.pages.samples.login_2');
    }

    /**
     * Show the admin multi level login page.
     *
     * @return \Illuminate\Support\Response
     */
    public function multilevel_login()
    {
        return view('admin.pages.samples.multilevel_login');
    }

    /**
     * Show the admin news grid.
     *
     * @return \Illuminate\Support\Response
     */
    public function news_grid()
    {
        return view('admin.pages.samples.news_grid');
    }

    /**
     * Show the admin orders.
     *
     * @return \Illuminate\Support\Response
     */
    public function orders()
    {
        return view('admin.pages.samples.orders');
    }

    /**
     * Show the admin portfolio.
     *
     * @return \Illuminate\Support\Response
     */
    public function portfolio()
    {
        return view('admin.pages.samples.portfolio');
    }

    /**
     * Show the admin pricing table.
     *
     * @return \Illuminate\Support\Response
     */
    public function pricing_table()
    {
        return view('admin.pages.samples.pricing_table');
    }

    /**
     * Show the admin product catalogue.
     *
     * @return \Illuminate\Support\Response
     */
    public function product_catalogue()
    {
        return view('admin.pages.samples.product_catalogue');
    }

    /**
     * Show the admin project list.
     *
     * @return \Illuminate\Support\Response
     */
    public function project_list()
    {
        return view('admin.pages.samples.project_list');
    }

    /**
     * Show the admin profile.
     *
     * @return \Illuminate\Support\Response
     */
    public function profile()
    {
        return view('admin.pages.samples.profile');
    }

    /**
     * Show the admin register page.
     *
     * @return \Illuminate\Support\Response
     */
    public function register()
    {
        return view('admin.pages.samples.register');
    }

    /**
     * Show the admin register2 page.
     *
     * @return \Illuminate\Support\Response
     */
    public function register_2()
    {
        return view('admin.pages.samples.register_2');
    }

    /**
     * Show the admin search results.
     *
     * @return \Illuminate\Support\Response
     */
    public function search_results()
    {
        return view('admin.pages.samples.search_results');
    }

    /**
     * Show the admin timeline.
     *
     * @return \Illuminate\Support\Response
     */
    public function timeline()
    {
        return view('admin.pages.samples.timeline');
    }

    /**
     * Show the admin user listing.
     *
     * @return \Illuminate\Support\Response
     */
    public function user_listing()
    {
        return view('admin.pages.samples.user_listing');
    }

    /**
     * Show the admin widgets.
     *
     * @return \Illuminate\Support\Response
     */
    public function widgets()
    {
        return view('admin.pages.samples.widgets');
    }
}
