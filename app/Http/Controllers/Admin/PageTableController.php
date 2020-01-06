<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PageTableController extends Controller
{
    /**
     * Show the admin basic table.
     *
     * @return \Illuminate\Support\Response
     */
    public function basic()
    {
        return view('admin.pages.tables.basic');
    }

    /**
     * Show the admin datatable.
     *
     * @return \Illuminate\Support\Response
     */
    public function datatable()
    {
        return view('admin.pages.tables.datatable');
    }

    /**
     * Show the admin js_grid table.
     *
     * @return \Illuminate\Support\Response
     */
    public function js_grid()
    {
        return view('admin.pages.tables.js_grid');
    }

    /**
     * Show the admin sortable table.
     *
     * @return \Illuminate\Support\Response
     */
    public function sortable()
    {
        return view('admin.pages.tables.sortable');
    }
}
