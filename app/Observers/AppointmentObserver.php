<?php

namespace App\Observers;

use Illuminate\Support\Carbon;

class AppointmentObserver
{
    public function creating($model)
    {
        $model->start_at = request('app_date') && request('app_time')
            ? Carbon::createFromFormat('Y-m-d H:i',  request('app_date').' '. request('app_time'))
                ->toDateTimeString()
            : Carbon::tomorrow()->addDays(rand(1,5))->startOfHour()->addHours(rand(9,15));
    }
}