@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Home page</h4>
        </div>

        @php
            $carbon = new App\Utilities\AppCarbon;
            $date = "2020-02-19";
            $office_day = App::make('doctor-schedule')->setDoctor($doctor)->findOfficeDay($date);
            $s = $office_day->hour->start_at;
            $start_date = $carbon->parse('2020-02-19 11:00:00');
            $start_at = '11:00';
            $end_at = '16:00';
            $slot_duration = 15;
            $period = Carbon\CarbonPeriod::create('2020-04-21', '3 days', '2020-04-28');

            $int = Carbon\CarbonInterval::minutes(15);
            Carbon\Carbon::create($date)->addMinutes($int);

            $period = $carbon->parse($start_at)->diffInMinutes($carbon->parse($end_at));
            $slots = $carbon->parse($start_at)->diffInMinutes($carbon->parse($end_at))/$slot_duration;
            Carbon\CarbonInterval::make($slot_duration);
            $allTimes = [];
            array_push($allTimes, $start_date->toTimeString());
            for ($i = 0; $i < $slots-1; $i ++){
                $start_date->addMinutes($slot_duration);
                array_push($allTimes, $start_date->toTimeString());
            }
            // print_r($allTimes);
            in_array($start_at, $allTimes);

            $period =\Carbon\CarbonPeriod::create('11:00:00', '20 minutes', '16:00:00');
            foreach ($period as $key => $date) {
                $coll = collect($date->format('H:i'));
                echo $coll->contains($start_at);
                // if ($key) {
                //     echo ', ';
                // }
                // echo $date->format('H:i');
            }
            // 04-21, 04-24, 04-27

            // Here is what happens under the hood:
            // $period->rewind(); // restart the iteration
            // while ($period->valid()) { // check if current item is valid
            //     if ($period->key()) { // echo comma if current key is greater than 0
            //         echo ', ';
            //     }
            //     echo $period->current()->format('m-d'); // echo current date
            //     $period->next(); // move to the next item
            // }
            // 04-21, 04-24, 04-27
        @endphp
    </div>
@endsection

