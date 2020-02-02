<?php

namespace App\Http\Controllers\Doctor;

use App\Doctor;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class DoctorPatientController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Doctor $doctor
     */
    public function create(Doctor $doctor) : View
    {
        $doctors = Doctor::all();

        return view('patients.create', compact('doctor', 'doctors'));
    }
}
