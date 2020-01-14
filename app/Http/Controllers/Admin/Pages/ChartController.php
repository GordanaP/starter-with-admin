<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    /**
     * Show the admin c3 chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function c3()
    {
        return view('admin.pages.charts.c3');
    }

    /**
     * Show the admin chartist chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function chartist()
    {
        return view('admin.pages.charts.chartist');
    }

    /**
     * Show the admin chartJs chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function chartJs()
    {
        return view('admin.pages.charts.chartJs');
    }

    /**
     * Show the admin flot chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function flot()
    {
        return view('admin.pages.charts.flot');
    }

    /**
     * Show the admin google chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function google()
    {
        return view('admin.pages.charts.google');
    }

    /**
     * Show the admin justgage chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function justgage()
    {
        return view('admin.pages.charts.justgage');
    }

    /**
     * Show the admin morris chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function morris()
    {
        return view('admin.pages.charts.morris');
    }

    /**
     * Show the admin sparkline chart.
     *
     * @return \Illuminate\Support\Response
     */
    public function sparkline()
    {
        return view('admin.pages.charts.sparkline');
    }
}
