<?php

namespace App\Repositories;

use App\Doctor;
use App\Utilities\AbstractDelete;

class DoctorRepository extends AbstractDelete
{
    /**
     * Create a new repository instance.
     */
    public function __construct()
    {
        $this->model = Doctor::class;
    }
}
