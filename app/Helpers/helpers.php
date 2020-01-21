<?php

/**
 * Check the value.
 *
 * @param  string $value_1
 * @param  string $value_2
 * @return string
 */
function checked($value_1, $value_2)
{
    return $value_1 == $value_2 ? 'checked' : '';
}

/**
 * Select the value.
 *
 * @param  string $value_1
 * @param  string $value_2
 * @return string
 */
function select($value_1, $value_2)
{
    return $value_1 == $value_2 ? 'selected' : '';
}

/**
 * Make the active class.
 *
 * @param  string $value_1
 * @param  string $value_2
 * @return string
 */
function active($value_1, $value_2)
{
    return $value_1 == $value_2 ? 'active' : '';
}
