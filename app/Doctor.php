<?php

namespace App;

use App\Traits\DatePresenter;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use DatePresenter;

    protected $fillable = ['first_name', 'last_name', 'title', 'education'];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
