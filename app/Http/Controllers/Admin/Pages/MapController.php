<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class MapController extends Controller
{
    /**
     * Show the admin google maps.
     *
     * @return \Illuminate\Support\Response
     */
    public function google()
    {
        return view('admin.pages.maps.google');
    }

    /**
     * Show the admin mapael maps.
     *
     * @return \Illuminate\Support\Response
     */
    public function mapael()
    {
        return view('admin.pages.maps.mapael');
    }

    /**
     * Show the admin vector maps.
     *
     * @return \Illuminate\Support\Response
     */
    public function vector()
    {
        return view('admin.pages.maps.vector');
    }
}
