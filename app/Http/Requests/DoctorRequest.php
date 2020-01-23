<?php

namespace App\Http\Requests;

use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;
use App\Utilities\UploadImageRadio;
use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'graduation'=> 'required|max:199',
            'graduation_year'=> [
                'required', 'date_format:Y',
                'after_or_equal:'.Carbon::now()->subYears(70)->year,
                'before_or_equal:'.Carbon::now()->year
            ],
            'board_certification'=> 'nullable|max:199',
            'certification_year'=> [
                'nullable', 'date_format:Y', 'after:graduation_year',
                'after_or_equal:'.Carbon::now()->subYears(70)->year,
                'before_or_equal:'.Carbon::now()->year,
            ],
            'training'=> 'nullable|max:1000',
            'expertise_id'=> 'nullable|exists:expertises,id',
            'academic_title'=> 'nullable|max:199',
            'academic_affiliation'=> 'nullable|max:500',
            'hospital_affiliation'=> 'nullable|max:500',
            'administrative_position'=> 'nullable|max:300',
            'image' => 'nullable|image',
            UploadImageRadio::get()->name => [
                'sometimes', 'required',
                Rule::in(UploadImageRadio::get()->values())
            ]
        ];
    }
}
