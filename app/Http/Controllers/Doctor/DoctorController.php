<?php

namespace App\Http\Controllers\Doctor;

use App\Doctor;
use App\Expertise;
use Illuminate\Http\Request;
use App\Contracts\ImageManager;
use App\Http\Controllers\Controller;
use App\Services\ManageImage\DoctorImage;

class DoctorController extends Controller
{
    /**
     * The image manager.
     *
     * @var App\Contracts\ImageManager
     */
    private $imageManager;

    /**
     * Create a new class instance.
     *
     * @param App\Contracts\ImageManager $imageManager
     */
    public function __construct(ImageManager $imageManager)
    {
        $this->imageManager = $imageManager;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expertises = Expertise::all();

        return view('doctors.create', compact('expertises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all());

        $doctor->expertises()->sync($request->expertise_id);

        $this->imageManager->manage($doctor, $request->image);

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
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $expertises = Expertise::all();

        return view('doctors.edit', compact('doctor', 'expertises'));
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
        $doctor->update($request->all());

        $doctor->expertises()->sync($request->expertise_id);

        $this->imageManager->manage($doctor, $request->image);

        return back();
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
