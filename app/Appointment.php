<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'patient_id', 'start_at'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start_at'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['end_at'];

    /**
     * Get the appointment end time.
     *
     * @return \Carbon\Carbon
     */
    public function getEndAtAttribute()
    {
        return $this->start_at->addMinutes(15)->toDateTimeString();
    }

    /**
     * Get the doctor that has the given appointment.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    /**
     * Get the patient that has the given appointment.
     *
     * @return  \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
