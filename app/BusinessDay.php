<?php

namespace App;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class BusinessDay extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['day', 'day_iso', 'open', 'close'];

    /**
     * The doctors that have the experises.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function doctors()
    {
       return $this->belongsToMany(Doctor::class);
    }

    /**
     * Find the day by the iso index.
     *
     * @param  integer $iso
     * @return \App\BusinessDay
     */
    public static function findByIso($iso)
    {
        return static::where('iso', $iso)->firstOrFail();
    }

}
