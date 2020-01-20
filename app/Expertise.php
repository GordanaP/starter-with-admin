<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    protected $fillable = ['field'];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
}
