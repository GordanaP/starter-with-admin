<?php

namespace App\Http\Controllers\Doctor;

use App\Doctor;
use App\Expertise;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Http\Requests\DoctorDeleteRequest;
use Illuminate\Http\RedirectResponse;
use App\Repositories\DoctorRepository;

class DoctorController extends Controller
{
    /**
     * The doctors.
     *
     * @var \App\Repositories\DoctorRepository
     */
    private $doctors;

    /**
     * Create a new class instance.
     *
     * @param \App\Repositories\DoctorRepository $doctors
     */
    public function __construct(DoctorRepository $doctors)
    {
        $this->doctors = $doctors;
    }

    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('doctors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $expertises = Expertise::all();

        return view('doctors.create', compact('expertises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DoctorRequest  $request
     */
    public function store(DoctorRequest $request) : RedirectResponse
    {
        $this->doctors->create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     */
    public function show(Doctor $doctor): View
    {
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     */
    public function edit(Doctor $doctor) : View
    {
        $expertises = Expertise::all();

        return view('doctors.edit', compact('doctor', 'expertises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\DoctorRequest  $request
     * @param  \App\Doctor  $doctor
     */
    public function update(DoctorRequest $request, Doctor $doctor) : RedirectResponse
    {
        $this->doctors->update($request->all(), $doctor);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @param  \App\Http\Requests\  $request
     */
    public function destroy(DoctorDeleteRequest $request, Doctor $doctor = null)  : RedirectResponse
    {
        $this->doctors->delete($doctor ?? $request->ids);

        if($request->ajax()) {
            return response([
                'message' => 'The record has been deleted.',
            ]);
        } else {
            return redirect()->route('admin.doctors.index');
        }
    }
}
