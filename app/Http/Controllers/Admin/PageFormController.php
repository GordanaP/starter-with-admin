<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PageFormController extends Controller
{
    /**
     * Show the admin basic form elements.
     *
     * @return \Illuminate\Support\Response
     */
    public function basic()
    {
        return view('admin.pages.forms.basic');
    }

    /**
     * Show the admin advanced form elements.
     *
     * @return \Illuminate\Support\Response
     */
    public function advanced()
    {
        return view('admin.pages.forms.advanced');
    }

    /**
     * Show the admin form validation.
     *
     * @return \Illuminate\Support\Response
     */
    public function validation()
    {
        return view('admin.pages.forms.validation');
    }

    /**
     * Show the admin form wizard.
     *
     * @return \Illuminate\Support\Response
     */
    public function wizard()
    {
        return view('admin.pages.forms.wizard');
    }
}
