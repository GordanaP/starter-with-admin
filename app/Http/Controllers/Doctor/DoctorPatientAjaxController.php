<?php

namespace App\Http\Controllers\Doctor;

use App\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;

class DoctorPatientAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Doctor $doctor
     */
    public function index(Doctor $doctor)
    {
        return PatientResource::collection($doctor->patients);
    }
}
