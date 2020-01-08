<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class SampleController extends Controller
{
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
