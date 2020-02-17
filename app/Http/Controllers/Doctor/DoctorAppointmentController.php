<?php

namespace App\Http\Controllers\Doctor;

use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use App\Repositories\AppointmentRepository;

class DoctorAppointmentController extends Controller
{
    /**
     * The appointments.
     *
     * @var \App\Repositories\AppointmentRepository
     */
    private $appointments;

    /**
     * Create a new class instance.
     *
     * @param \App\Repositories\AppointmentRepository $appointments
     */
    public function __construct(AppointmentRepository $appointments)
    {
        $this->appointments = $appointments;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Doctor $doctor)
    {
        return view('appointments.create')->with([
            'doctor' => $doctor,
            'patient' => Patient::find(request('patient')) ?? '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppointmentRequest $request, Doctor $doctor)
    {
        // return $request->all();

        $this->appointments->schedule($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
