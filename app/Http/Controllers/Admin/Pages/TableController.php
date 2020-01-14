<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class TableController extends Controller
{
    /**
     * Show the admin basic tables.
     *
     * @return \Illuminate\Support\Response
     */
    public function basic()
    {
        return view('admin.pages.tables.basic');
    }

    /**
     * Show the admin datatables.
     *
     * @return \Illuminate\Support\Response
     */
    public function datatable()
    {
        return view('admin.pages.tables.datatable');
    }

    /**
     * Show the admin js_grid tables.
     *
     * @return \Illuminate\Support\Response
     */
    public function js_grid()
    {
        return view('admin.pages.tables.js_grid');
    }

    /**
     * Show the admin sortable tables.
     *
     * @return \Illuminate\Support\Response
     */
    public function sortable()
    {
        return view('admin.pages.tables.sortable');
    }
}
