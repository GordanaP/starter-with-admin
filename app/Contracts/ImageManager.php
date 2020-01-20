<?php

namespace App\Contracts;

interface ImageManager
{
    /**
     * Manage the image.
     *
     * @param  \App\Model $model
     * @param  array $data
     */
    public function manage($model, $data);
}