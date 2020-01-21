<?php

namespace App\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Utilities\UploadImageRadio;

class UploadImage
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     */
    public function compose(View $view)
    {
        $view->with([
            'manage_image' => UploadImageRadio::get()->name,
            'upload_image' => UploadImageRadio::get()->values()[0],
            'remove_image' => UploadImageRadio::get()->values()[1],
            'upload_image_label' => UploadImageRadio::get()
                ->key(UploadImageRadio::get()->values()[0]),
            'remove_image_label' => UploadImageRadio::get()
                ->key(UploadImageRadio::get()->values()[1]),
        ]);
    }
}