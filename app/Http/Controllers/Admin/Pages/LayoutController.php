<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    /**
     * Show the admin boxed page layout.
     *
     * @return \Illuminate\Support\Response
     */
    public function boxed()
    {
        return view('admin.pages.layouts.boxed');
    }

    /**
     * Show the admin compact menu sidebar.
     *
     * @return \Illuminate\Support\Response
     */
    public function sidebar_compact()
    {
        return view('admin.pages.layouts.sidebar_compact');
    }

    /**
     * Show the admin fixed sidebar.
     *
     * @return \Illuminate\Support\Response
     */
    public function sidebar_fixed()
    {
        return view('admin.pages.layouts.sidebar_fixed');
    }

    /**
     * Show the admin hidden sidebar.
     *
     * @return \Illuminate\Support\Response
     */
    public function sidebar_hidden()
    {
        return view('admin.pages.layouts.sidebar_hidden');
    }

    /**
     * Show the admin icon menu sidebar.
     *
     * @return \Illuminate\Support\Response
     */
    public function sidebar_icon()
    {
        return view('admin.pages.layouts.sidebar_icon');
    }

    /**
     * Show the admin overlay sidebar.
     *
     * @return \Illuminate\Support\Response
     */
    public function sidebar_overlay()
    {
        return view('admin.pages.layouts.sidebar_overlay');
    }
}
