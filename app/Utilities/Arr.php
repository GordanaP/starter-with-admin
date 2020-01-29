<?php

namespace App\Utilities;

class Arr
{
    /**
     * The array.
     *
     * @var array
     */
    public $array = [];

    /**
     * The array's values.
     *
     * @return array
     */
    public function values()
    {
        return array_values($this->array);
    }

    /**
     * The key for the specific array's value.
     *
     * @param  string $value
     * @return string
     */
    public function key($value)
    {
        return array_search($value, $this->array);
    }
}