<?php

namespace App\Http\Controllers\Appointment;

use App\Appointment;
use App\Http\Resources\AppointmentResource;
use App\Http\Controllers\Controller;

class AppointmentAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return AppointmentResource::collection(Appointment::all());
        return Appointment::with('doctor', 'patient')->get();
    }
}
