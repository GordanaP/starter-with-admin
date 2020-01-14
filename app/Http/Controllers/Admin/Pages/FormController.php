<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * Show the admin advanced forms.
     *
     * @return \Illuminate\Support\Response
     */
    public function advanced()
    {
        return view('admin.pages.forms.advanced');
    }

    /**
     * Show the admin basic forms.
     *
     * @return \Illuminate\Support\Response
     */
    public function basic()
    {
        return view('admin.pages.forms.basic');
    }

    /**
     * Show the admin form code editors.
     *
     * @return \Illuminate\Support\Response
     */
    public function code_editors()
    {
        return view('admin.pages.forms.code_editors');
    }

    /**
     * Show the admin form text editors.
     *
     * @return \Illuminate\Support\Response
     */
    public function text_editors()
    {
        return view('admin.pages.forms.text_editors');
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
