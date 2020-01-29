<?php

namespace App\Repositories;

use App\Patient;
use App\Utilities\AbstractDelete;

class PatientRepository extends AbstractDelete
{
    /**
     * Create a new repository instance.
     */
    public function __construct()
    {
        $this->model = Patient::class;
    }
}
