<?php

namespace App\Http\Controllers\Patient;

use App\Doctor;
use App\Patient;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PatientRequest;
use Illuminate\Http\RedirectResponse;
use App\Repositories\PatientRepository;

class PatientController extends Controller
{
    /**
     * The patients.
     *
     * @var \App\Repositories\PatientRepository
     */
    private $patients;

    /**
     * Create a new class instance.
     *
     * @param \App\Repositories\PatientRepository $patients
     */
    public function __construct(PatientRepository $patients)
    {
        $this->patients = $patients;
    }

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('patients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $doctors = Doctor::all();

        return view('patients.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PatientRequest  $request
     */
    public function store(PatientRequest $request) : RedirectResponse
    {
        Doctor::find($request->doctor_id)
            ->patients()
            ->create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     */
    public function show(Patient $patient) : View
    {
        return view('patients.show', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     */
    public function edit(Patient $patient) : View
    {
        $doctors = Doctor::all();

        return view('patients.edit', compact('patient', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PatientRequest  $request
     * @param  \App\Patient  $patient
     */
    public function update(PatientRequest $request, Patient $patient) : RedirectResponse
    {
        Doctor::find($request->doctor_id)
            ->patients()
            ->save($patient->fill($request->all()));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     */
    public function destroy(Request $request, Patient $patient = null)
    {
        $this->patients->delete($patient ?? $request->ids);

        if($request->ajax()) {
            return response([
                'message' => 'The record has been deleted.',
            ]);
        } else {
            return redirect()->route('admin.patients.index');
        }
    }
}
