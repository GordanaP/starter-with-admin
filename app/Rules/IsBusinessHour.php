<?php

namespace App\Rules;

use App\Utilities\AppCarbon;
use Illuminate\Support\Facades\App;
use Illuminate\Contracts\Validation\Rule;

class IsBusinessHour implements Rule
{
    /**
     * The appointment date.
     *
     * @var string
     */
    public $app_date;

    /**
     * Create a new rule instance.
     *
     * @param string
     */
    public function __construct($app_date)
    {
        $this->app_date = $app_date;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $app_carbon = new AppCarbon;

        $date = $this->app_date;
        $valid_date = $app_carbon->validate($date) ? $app_carbon->parse($date) : null;

        if(isset($valid_date)) {
            return $valid_date->isSaturday()
                ? App::make('business-hours')->isOfficialWorkHour($value, 'Saturday')
                : App::make('business-hours')->isOfficialWorkHour($value, 'weekday');
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $app_carbon = new AppCarbon;

        return $app_carbon->validate($this->app_date) ? 'The value must be during business hours.' : 'The value is not applicable on an invalid date.';
    }
}
