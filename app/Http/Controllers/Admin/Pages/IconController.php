<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class IconController extends Controller
{
    /**
     * Show the admin flag icons.
     *
     * @return \Illuminate\Support\Response
     */
    public function flag()
    {
        return view('admin.pages.icons.flag');
    }

    /**
     * Show the admin font awesome icons.
     *
     * @return \Illuminate\Support\Response
     */
    public function font_awesome()
    {
        return view('admin.pages.icons.font_awesome');
    }

    /**
     * Show the admin material design icons.
     *
     * @return \Illuminate\Support\Response
     */
    public function mdi()
    {
        return view('admin.pages.icons.mdi');
    }

    /**
     * Show the admin simple line icons.
     *
     * @return \Illuminate\Support\Response
     */
    public function simple_line()
    {
        return view('admin.pages.icons.simple_line');
    }

    /**
     * Show the admin themify icons.
     *
     * @return \Illuminate\Support\Response
     */
    public function themify()
    {
        return view('admin.pages.icons.themify');
    }
}
