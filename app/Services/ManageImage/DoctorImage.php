<?php

namespace App\Services\ManageImage;

use App\Contracts\ImageManager;
use App\Services\ManageImage\AbstractImage;

class DoctorImage extends AbstractImage implements ImageManager
{
    /**
     * Manage the image.
     *
     * @param  \App\Doctor $doctor
     * @param  array $data
     */
    public function manage($doctor, $data)
    {
        $this->setDisk('doctors')
            ->setRelationship($doctor->image())
            ->handle($doctor->image, $data);
    }
}
