<?php

namespace App\Rules;

use App\Utilities\AppCarbon;
use Illuminate\Contracts\Validation\Rule;

class IsValidDate implements Rule
{
    public $app_date;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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

        return $app_carbon->validate($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'An invalid date.';
    }
}
