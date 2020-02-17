<?php

namespace App\Rules;

use App\Utilities\AppCarbon;
use Illuminate\Contracts\Validation\Rule;

class AgeLimit implements Rule
{
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

        if ($app_carbon->validate($value)) {

            $age = $app_carbon->parse($value)->age;

            return $age <= 110;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The age can be 110 years maximum';
    }
}
