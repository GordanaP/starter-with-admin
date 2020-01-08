<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class UiFeatureController extends Controller
{
    /**
     * Show the admin accordions.
     *
     * @return \Illuminate\Support\Response
     */
    public function accordions()
    {
        return view('admin.pages.ui-features.accordions');
    }

    /**
     * Show the admin badges.
     *
     * @return \Illuminate\Support\Response
     */
    public function badges()
    {
        return view('admin.pages.ui-features.badges');
    }

    /**
     * Show the admin breadcrumbs.
     *
     * @return \Illuminate\Support\Response
     */
    public function breadcrumbs()
    {
        return view('admin.pages.ui-features.breadcrumbs');
    }

    /**
     * Show the admin buttons.
     *
     * @return \Illuminate\Support\Response
     */
    public function buttons()
    {
        return view('admin.pages.ui-features.buttons');
    }

    /**
     * Show the admin dropdowns.
     *
     * @return \Illuminate\Support\Response
     */
    public function dropdowns()
    {
        return view('admin.pages.ui-features.dropdowns');
    }

    /**
     * Show the admin modals.
     *
     * @return \Illuminate\Support\Response
     */
    public function modals()
    {
        return view('admin.pages.ui-features.modals');
    }

    /**
     * Show the admin progress.
     *
     * @return \Illuminate\Support\Response
     */
    public function progress()
    {
        return view('admin.pages.ui-features.progress');
    }

    /**
     * Show the admin pagination.
     *
     * @return \Illuminate\Support\Response
     */
    public function pagination()
    {
        return view('admin.pages.ui-features.pagination');
    }

    /**
     * Show the admin tabs.
     *
     * @return \Illuminate\Support\Response
     */
    public function tabs()
    {
        return view('admin.pages.ui-features.tabs');
    }

    /**
     * Show the admin tooltip.
     *
     * @return \Illuminate\Support\Response
     */
    public function tooltips()
    {
        return view('admin.pages.ui-features.tooltips');
    }

    /**
     * Show the admin typography.
     *
     * @return \Illuminate\Support\Response
     */
    public function typography()
    {
        return view('admin.pages.ui-features.typography');
    }
}
