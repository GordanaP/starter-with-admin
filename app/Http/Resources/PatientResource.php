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
            'date_of_birth' => $this->birthday->format('d m Y'),
            'medical_record' => $this->medical_record,
            'doctor' => $this->doctor->full_name,
            'link' => [
                'show' => route('admin.patients.show', $this),
                'edit' => route('admin.patients.edit', $this),
                'show_doctor' => '#',
            ]
        ];
    }
}
