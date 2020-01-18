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
            'title' => $this->title,
            'joined' => $this->created_at,
            'link' => [
                'show' => route('admin.doctors.show', $this),
                'edit' => route('admin.doctors.edit', $this),
            ]
        ];
    }
}
