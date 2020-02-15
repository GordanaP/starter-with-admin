<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
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
            'expertises' => $this->expertises ?? '',
            'patients_count' => $this->patients->count(),
            'link' => [
                'show' => route('admin.doctors.show', $this),
                'edit' => route('admin.doctors.edit', $this),
                'show_patients' => route('admin.doctors.show', [$this] + ['patients' => 1]),
                'show_schedule' => route('admin.doctors.show', [$this] + ['schedule' => 1]),
            ]
        ];
    }
}
