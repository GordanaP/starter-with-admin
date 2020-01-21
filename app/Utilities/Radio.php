<?php

namespace App\Utilities;

class Radio
{
    /**
     * The name.
     *
     * @var string
     */
    public $name;

    /**
     * The buttons.
     *
     * @var array
     */
    public $buttons = [];

    /**
     * Get the buttons' values.
     *
     * @return array
     */
    public function values()
    {
        return array_values($this->buttons);
    }

    /**
     * Get the key for the specific button value.
     *
     * @param  string $value
     * @return string
     */
    public function key($value)
    {
        return array_search($value, $this->buttons);
    }
}