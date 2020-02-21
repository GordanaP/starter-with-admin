<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['field'];

    /**
     * The doctors that have the expertises.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
