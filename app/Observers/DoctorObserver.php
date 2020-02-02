<?php

namespace App\Observers;

use Illuminate\Support\Facades\App;

class DoctorObserver
{
    public function deleting($model)
    {
        App::make('doctor_image')->removeStoragePath($model->image);

        $model->image()->delete();
    }
}