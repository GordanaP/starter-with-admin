<?php

namespace App\Observers;

use Illuminate\Support\Str;

class ExpertiseObserver
{
    public function creating($model)
    {
        $model->slug = Str::slug($model->name);
    }

    public function updating($model)
    {
        $model->slug = Str::slug($model->name);
    }
}