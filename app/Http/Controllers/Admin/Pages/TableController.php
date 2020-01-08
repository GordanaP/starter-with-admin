<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class TableController extends Controller
{
    /**
     * Show the admin js_grid table.
     *
     * @return \Illuminate\Support\Response
     */
    public function js_grid()
    {
        return view('admin.pages.tables.js_grid');
    }
}
