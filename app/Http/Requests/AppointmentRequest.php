<?php

namespace App\Http\Requests;

use App\Rules\AfterNow;
use App\Rules\AgeLimit;
use App\Rules\IsValidDate;
use App\Rules\IsValidTime;
use Illuminate\Support\Arr;
use App\Rules\IsBusinessDay;
use App\Utilities\AppCarbon;
use App\Rules\IsBusinessHour;
use App\Rules\IsDoctorOfficeDay;
use App\Rules\IsDoctorOfficeHour;
use Illuminate\Support\Facades\App;
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
            'first_{
                name' => 'filled|max:50',
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
                'required', new IsValidTime
            ],
        ];

        if( App::make('doctor-schedule')->setDoctor($this->doctor)->isValidOfficeDay($this->app_date))
        {
            return $this->addToRules($rules, 'app_time', $this->appTimeRules());
        }

        return $rules;

    }

    /**
     * Add new rules to the existing rules.
     *
     * @param array $rules
     * @param string $member
     * @param array $add
     */
    private function addToRules($rules, $member, $add): array
    {
        $pulled = Arr::pull($rules, $member);
        $rules[$member] = array_merge($pulled, $add);

        return $rules;
    }

    /**
     * The new rules related to the appointment time.
     */
    private function appTimeRules(): array
    {
        return [
            new IsDoctorOfficeHour($this->doctor, $this->app_date),
            new AfterNow($this->app_date),
            new IsDoctorSchedulingSlot($this->doctor, $this->app_date),
            new IsDoctorFreeSchedulingSlot($this->doctor, $this->app_date),
        ];
    }
}