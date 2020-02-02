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
            'first_name'=> 'sometimes|required|max:50',
            'last_name'=> 'sometimes|required|max:50',
            'birthday' => [
                'sometimes','required',
                'date_format:Y-m-d',
                'before:today()',
                new AgeLimit
            ],
            'street_address' => 'sometimes|required|max:199',
            'city' => 'sometimes|required|max:100',
            'country' => [
                'sometimes', 'required',
                Rule::in(CountryList::get()->values())
            ],
            'phone' => 'sometimes|required',
            'doctor_id' => 'sometimes|required|exists:doctors,id',
            'ids' => 'sometimes|exists:patients,id',
        ];
    }
}
