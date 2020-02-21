<?php

namespace App\Http\Requests;

use App\Rules\AfterNow;
use App\Rules\AgeLimit;
use App\Rules\IsValidDate;
use App\Rules\IsBusinessDay;
use App\Rules\IsBusinessHour;
use App\Rules\IsDoctorOfficeDay;
use App\Rules\IsDoctorOfficeHour;
use App\Rules\IsDoctorSchedulingSlot;
use App\Rules\IsDoctorFreeSchedulingSlot;
use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'patient' => 'filled|exists:patients,id',
            'first_name' => 'filled|max:50',
            'last_name'=> 'filled|max:50',
            'birthday' => [
                'filled',
                new AgeLimit,
            ],
            'phone' => 'filled',
            'app_date' => [
                'required',
                new IsValidDate,
                'after_or_equal:today',
                new IsBusinessDay,
                new IsDoctorOfficeDay($this->doctor),
            ],
            'app_time' => [
                'required', 'date_format:H:i',
            ],
        ];

        if($this->app_time)
        {
            $rules['app_time'] = [
                new IsDoctorOfficeHour($this->doctor, $this->app_date),
                new AfterNow($this->app_date),
                new IsDoctorSchedulingSlot($this->doctor, $this->app_date),
                new IsDoctorFreeSchedulingSlot($this->doctor, $this->app_date),
            ];
        }

        return $rules;
    }
}
