<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the vendor dashboard.
     *
     * @return \Illuminate\Support\Response
     */
    public function index()
    {
        return view('admin.pages.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Support\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
