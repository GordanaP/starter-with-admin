<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * Show the admin calendar.
     *
     * @return \Illuminate\Support\Response
     */
    public function calendar()
    {
        return view('admin.pages.apps.calendar');
    }

    /**
     * Show the admin chats app.
     *
     * @return \Illuminate\Support\Response
     */
    public function chats()
    {
        return view('admin.pages.apps.chats');
    }

    /**
     * Show the admin email.
     *
     * @return \Illuminate\Support\Response
     */
    public function email()
    {
        return view('admin.pages.apps.email');
    }

    /**
     * Show the admin image gallery.
     *
     * @return \Illuminate\Support\Response
     */
    public function gallery()
    {
        return view('admin.pages.apps.gallery');
    }

    /**
     * Show the admin kanaban board.
     *
     * @return \Illuminate\Support\Response
     */
    public function kanban()
    {
        return view('admin.pages.apps.kanban');
    }

    /**
     * Show the admin tickets.
     *
     * @return \Illuminate\Support\Response
     */
    public function tickets()
    {
        return view('admin.pages.apps.tickets');
    }

    /**
     * Show the admin todo list.
     *
     * @return \Illuminate\Support\Response
     */
    public function todo()
    {
        return view('admin.pages.apps.todo');
    }
}
