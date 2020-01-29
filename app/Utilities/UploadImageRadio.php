<?php

namespace App\Utilities;

use App\Utilities\Arr;

class UploadImageRadio extends Arr
{
    /**
     * The radio name.
     *
     * @var string
     */
    public $name = 'manage_image';

    /**
     * { @inheritDocs }
     */
    public $array = [
        'Upload image' => 'upload_image',
        'Remove image' => 'remove_image',
    ];

    /**
     * Get the new instance of the class.
     *
     * @return self
     */
    public static function get()
    {
        return new static;
    }
}