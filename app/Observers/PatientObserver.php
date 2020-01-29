<?php

namespace App\Observers;

use Illuminate\Support\Facades\App;

class PatientObserver
{
    public function creating($model)
    {
        $model->mrn = App::make('presenter')->createMRN($model->birthday);
    }

    public function updating($model)
    {
        $model->isDirty('birthday')
            ? $model->mrn = App::make('presenter')->createMRN($model->birthday) : '';
    }
}