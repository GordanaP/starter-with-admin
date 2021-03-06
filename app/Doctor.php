<?php

namespace App;

use App\Traits\DatePresenter;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use DatePresenter;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'graduation','graduation_year', 'training',
        'board_certification', 'certification_year', 'academic_title',
        'academic_affiliation', 'hospital_affiliation', 'administrative_position'
    ];

    /**
     * The doctor's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * The expertises that belong to the doctors.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function expertises()
    {
        return $this->belongsToMany(Expertise::class);
    }

    /**
     * The image that belongs to the doctor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * The patients that belong to the doctor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    /**
     * Determine if the doctor has an image.
     *
     * @return boolean
     */
    public function hasImage()
    {
        return $this->image;
    }

    /**
     * Get the doctor's image.
     *
     * @return \Illuminate\Http\UploadedFile
     */
    public function getImage()
    {
        return $this->hasImage() ? App::make('doctor_image')->getUrl($this->image)
            : asset('images/no_image.svg');
    }

    /**
     * Add expertises to the doctor.
     *
     * @param array $expertises
     */
    public function addExpertises($expertises)
    {
        $this->expertises()->sync($expertises);
    }
}
