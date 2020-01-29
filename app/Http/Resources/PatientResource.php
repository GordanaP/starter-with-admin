<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'date_of_birth' => $this->birthday,
            'medical_record' => $this->mrn,
            'doctor' => optional($this->doctor)->full_name,
            'link' => [
                'show' => route('admin.patients.show', $this),
                'edit' => route('admin.patients.edit', $this),
                'show_doctor' => route('admin.doctors.show', $this->doctor),
            ]
        ];
    }
}
