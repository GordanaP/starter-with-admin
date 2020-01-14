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
        return view('admin.pages.ui-features.basic.accordions');
    }

    /**
     * Show the admin badges.
     *
     * @return \Illuminate\Support\Response
     */
    public function badges()
    {
        return view('admin.pages.ui-features.basic.badges');
    }

    /**
     * Show the admin breadcrumbs.
     *
     * @return \Illuminate\Support\Response
     */
    public function breadcrumbs()
    {
        return view('admin.pages.ui-features.basic.breadcrumbs');
    }

    /**
     * Show the admin buttons.
     *
     * @return \Illuminate\Support\Response
     */
    public function buttons()
    {
        return view('admin.pages.ui-features.basic.buttons');
    }

    /**
     * Show the admin dropdowns.
     *
     * @return \Illuminate\Support\Response
     */
    public function dropdowns()
    {
        return view('admin.pages.ui-features.basic.dropdowns');
    }

    /**
     * Show the admin modals.
     *
     * @return \Illuminate\Support\Response
     */
    public function modals()
    {
        return view('admin.pages.ui-features.basic.modals');
    }

    /**
     * Show the admin notifications.
     *
     * @return \Illuminate\Support\Response
     */
    public function notifications()
    {
        return view('admin.pages.ui-features.basic.notifications');
    }

    /**
     * Show the admin progress.
     *
     * @return \Illuminate\Support\Response
     */
    public function progress()
    {
        return view('admin.pages.ui-features.basic.progress');
    }

    /**
     * Show the admin pagination.
     *
     * @return \Illuminate\Support\Response
     */
    public function pagination()
    {
        return view('admin.pages.ui-features.basic.pagination');
    }

    /**
     * Show the admin popups.
     *
     * @return \Illuminate\Support\Response
     */
    public function popups()
    {
        return view('admin.pages.ui-features.basic.popups');
    }

    /**
     * Show the admin tabs.
     *
     * @return \Illuminate\Support\Response
     */
    public function tabs()
    {
        return view('admin.pages.ui-features.basic.tabs');
    }

    /**
     * Show the admin tooltip.
     *
     * @return \Illuminate\Support\Response
     */
    public function tooltips()
    {
        return view('admin.pages.ui-features.basic.tooltips');
    }

    /**
     * Show the admin typography.
     *
     * @return \Illuminate\Support\Response
     */
    public function typography()
    {
        return view('admin.pages.ui-features.basic.typography');
    }

    /**
     * Show the admin carousel.
     *
     * @return \Illuminate\Support\Response
     */
    public function carousel()
    {
        return view('admin.pages.ui-features.advanced.carousel');
    }

    /**
     * Show the admin clipboard.
     *
     * @return \Illuminate\Support\Response
     */
    public function clipboard()
    {
        return view('admin.pages.ui-features.advanced.clipboard');
    }

    /**
     * Show the admin colcade.
     *
     * @return \Illuminate\Support\Response
     */
    public function colcade()
    {
        return view('admin.pages.ui-features.advanced.colcade');
    }

    /**
     * Show the admin context menu.
     *
     * @return \Illuminate\Support\Response
     */
    public function context_menu()
    {
        return view('admin.pages.ui-features.advanced.context_menu');
    }

    /**
     * Show the admin dragula.
     *
     * @return \Illuminate\Support\Response
     */
    public function dragula()
    {
        return view('admin.pages.ui-features.advanced.dragula');
    }

    /**
     * Show the admin loaders.
     *
     * @return \Illuminate\Support\Response
     */
    public function loaders()
    {
        return view('admin.pages.ui-features.advanced.loaders');
    }

    /**
     * Show the admin slider.
     *
     * @return \Illuminate\Support\Response
     */
    public function slider()
    {
        return view('admin.pages.ui-features.advanced.slider');
    }

    /**
     * Show the admin treeview.
     *
     * @return \Illuminate\Support\Response
     */
    public function treeview()
    {
        return view('admin.pages.ui-features.advanced.treeview');
    }
}
