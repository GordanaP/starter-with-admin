<?php

namespace App\Http\Requests;

use App\Rules\AgeLimit;
use App\Utilities\CountryList;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'first_name'=> 'required|max:50',
            'last_name'=> 'required|max:50',
            'birthday' => [
                'required',
                'date_format:Y-m-d',
                'before:today()',
                new AgeLimit
            ],
            'street_address' => 'required|max:199',
            'city' => 'required|max:100',
            'country' => [
                'required',
                Rule::in(CountryList::get()->values())
            ],
            'phone' => 'required',
            'doctor_id' => 'required|exists:doctors,id',
        ];
    }
}
