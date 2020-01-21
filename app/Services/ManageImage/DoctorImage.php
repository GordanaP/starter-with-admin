<?php

namespace App\Services\ManageImage;

use App\Contracts\ImageManager;
use App\Services\ManageImage\AbstractImage;

class DoctorImage extends AbstractImage implements ImageManager
{
    /**
     * Manage the image store/remove.
     *
     * @param  \App\Doctor $doctor
     * @param  \Illuminate\Http\UploadedFile $file
     */
    public function manage($doctor, $file)
    {
        $this->setDisk('doctors')
            ->setRelationship($doctor->image())
            ->handle($doctor->image, $file);
    }
}
