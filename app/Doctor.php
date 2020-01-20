<?php

namespace App;

use App\Traits\DatePresenter;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use DatePresenter;

    protected $fillable = [
        'first_name', 'last_name', 'graduation','graduation_year', 'training',
        'board_certification', 'certification_year', 'academic_title',
        'academic_affiliaton', 'hospital_affiliaton', 'administrative_position'
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function expertises()
    {
        return $this->belongsToMany(Expertise::class);
    }
}
