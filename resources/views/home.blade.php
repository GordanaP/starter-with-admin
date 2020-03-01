@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Home page</h4>
        </div>
    </div>
@endsection

// return [
//     'patient' => 'filled|exists:patients,id',
//     'first_name' => 'filled|max:50',
//     'last_name'=> 'filled|max:50',
//     'birthday' => [
//         'filled',
//         new AgeLimit,
//     ],
//     'phone' => 'filled',
//     'app_date' => [
//         'required',
//         new IsValidDate,
//         'after_or_equal:today',
//         new IsBusinessDay,
//         new IsDoctorOfficeDay($this->doctor),
//     ],
//     'app_time' => [
//         'required', 'date_format:H:i',
//         \App::make('doctor-schedule')->setDoctor($this->doctor)->isValidOfficeDay($this->app_date)
//             ?   new IsDoctorOfficeHour($this->doctor, $this->app_date) : '',
//         \App::make('doctor-schedule')->setDoctor($this->doctor)->isValidOfficeDay($this->app_date)
//             ?    new AfterNow($this->app_date) : '',
//         \App::make('doctor-schedule')->setDoctor($this->doctor)->isValidOfficeDay($this->app_date)
//             ?   new IsDoctorSchedulingSlot($this->doctor, $this->app_date) : '',
//         \App::make('doctor-schedule')->setDoctor($this->doctor)->isValidOfficeDay($this->app_date)
//             ?   new IsDoctorFreeSchedulingSlot($this->doctor, $this->app_date) : '',
//     ],
// ];
