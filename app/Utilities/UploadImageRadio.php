<?php

namespace App\Utilities;

use App\Utilities\Radio;

class UploadImageRadio extends Radio
{
    /**
     * { @inheritDocs }
     */
    public $name = 'manage_image';

    /**
     * { @inheritDocs }
     */
    public $buttons = [
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