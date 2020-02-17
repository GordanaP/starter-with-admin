<?php

namespace App\Http\Requests;

use App\Rules\AgeLimit;
use App\Rules\IsValidDate;
use App\Rules\IsBusinessDay;
use App\Rules\IsBusinessHour;
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
        return [
            'patient' => 'filled|exists:patients,id',
            'first_name' => 'filled|max:50',
            'last_name'=> 'filled|max:50',
            'birthday' => [
                'filled',
                new AgeLimit
            ],
            'phone' => 'filled',
            'app_date' => [
                'required',
                new IsValidDate,
                'after_or_equal:today',
                new IsBusinessDay
            ],
            'app_time' => [
                'required',
                'date_format:H:i',
                new IsBusinessHour($this->app_date)
            ],
        ];
    }
}
