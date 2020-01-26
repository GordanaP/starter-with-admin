<?php

namespace App\Http\Controllers\Patient;

use App\Patient;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientResource;

class PatientAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PatientResource::collection(Patient::all());
    }
}
