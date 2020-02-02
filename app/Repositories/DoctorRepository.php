<?php

namespace App\Repositories;

use App\Doctor;
use App\Contracts\ImageManager;
use App\Utilities\AbstractDelete;

class DoctorRepository extends AbstractDelete
{
    /**
     * The image.
     *
     * @var \Illuminate\Http\File
     */
    private $image;

    /**
     * The image manager.
     *
     * @var \App\Contracts\ImageManager
     */
    private $imageManager;

    /**
     * The expertises.
     *
     * @var array
     */
    private $expertises;

    /**
     * Create a new repository instance.
     */
    public function __construct(ImageManager $imageManager)
    {
        $this->model = Doctor::class;
        $this->image = request('image');
        $this->imageManager = $imageManager;
        $this->expertises = request('expertise_id');
    }

    /**
     * Create a new doctor.
     *
     * @param  array $data
     * @return \App\Doctor
     */
    public function create($data)
    {
        $doctor = $this->model::create($data);

        $doctor->addExpertises($this->expertises);

        $this->imageManager->manage($doctor, $this->image);

        return $doctor;
    }

    /**
     * Update the doctor.
     *
     * @param  array $data   [description]
     * @param  \App\Doctor $doctor
     * @return \App\Doctor
     */
    public function update($data, $doctor)
    {
        $doctor->update($data);

        $doctor->addExpertises($this->expertises);

        $this->imageManager->manage($doctor, $this->image);
    }
}
