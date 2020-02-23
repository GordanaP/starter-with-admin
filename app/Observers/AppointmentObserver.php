<?php

namespace App\Observers;

use Illuminate\Support\Carbon;

class AppointmentObserver
{
    public function creating($model)
    {
        $date_time_string = request('app_date').' '. request('app_time');

        $model->start_at = request('app_date') && request('app_time')
            ? Carbon::createFromFormat('Y-m-d H:i',  $date_time_string)->toDateTimeString()
            : Carbon::tomorrow()->addDays(rand(1,5))->startOfHour()->addHours(rand(9,15));
    }

    public function updating($model)
    {
        $date_time_string = request('app_date').' '. request('app_time');

        $model->start_at = Carbon::createFromFormat('Y-m-d H:i', $date_time_string)->toDateTimeString();
    }
}