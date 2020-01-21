<?php

namespace App\Services\ManageImage;

use Storage;
use App\Utilities\UploadImageRadio;

abstract class AbstractImage
{
    /**
     * The storage disk.
     *
     * @var string
     */
    private $disk;

    /**
     * The relationship with the imageable model.
     *
     * @var \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    private $relationship;

    /**
     * The path attribute.
     *
     * @var string
     */
    private $pathAttribute = 'path';

    /**
     * The manage image request.
     *
     * @var string
     */
    private $manage_image;

    /**
     * The manage image request value.
     *
     * @var string
     */
    private $upload_image;

    /**
     * The manage image request value.
     *
     * @var string
     */
    private $remove_image;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->manage_image = request(UploadImageRadio::get()->name);
        $this->upload_image = UploadImageRadio::get()->values()[0];
        $this->remove_image = UploadImageRadio::get()->values()[1];
    }

    /**
     * Manage the model's image.
     *
     * @param  \App\Model $model
     * @param  \Illuminate\Http\UploadedFile $file
     */
    protected abstract function manage($model, $file);

    /**
     * The image url.
     *
     * @param  \App\Image $image
     * @return string
     */
    public function getUrl($image = null)
    {
        $pathAttribute = $this->pathAttribute;

        return Storage::url(optional($image)->$pathAttribute);
    }

    /**
     * Remove the image from storage.
     *
     * @param  \App\Image $image
     */
    public function removeStoragePath($image = null)
    {
        $pathAttribute = $this->pathAttribute;

        Storage::delete(optional($image)->$pathAttribute);
    }

    /**
     * Set the storage disk.
     *
     * @param string $disk
     */
    protected function setDisk($disk)
    {
        $this->disk = $disk;

        return $this;
    }

    /**
     * Set the relationship with the imageable model.
     *
     * @param \Illuminate\Database\Eloquent\Relations\MorphOne $relationship
     */
    protected function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * Handle the image store/remove.
     *
     * @param  \App\Image $image
     * @param  \Illuminate\Http\UploadedFile $file
     */
    protected function handle($image, $file = null)
    {
        if(! $this->manage_image || $this->manage_image == $this->upload_image) {
            if($file) {
                $image == null ? $this->add($file) : $this->update($image, $file);
            }
        }

        if($this->manage_image == $this->remove_image) {
            $this->removeStoragePath($image);
            $image->delete();
        }
    }

    /**
     * Update the image.
     *
     * @param  \App\Image $image
     * @param  \Illuminate\Http\UploadedFile $file
     */
    private function update($image, $file)
    {
        $this->removeStoragePath($image);

        $this->save($image, $file);
    }

    /**
     * Save the image.
     *
     * @param  \App\Image $image
     * @param  \Illuminate\Http\UploadedFile $file
     */
    private function save($image, $file)
    {
        $pathAttribute = $this->pathAttribute;

        $image->$pathAttribute = $this->makeStoragePath($file);

        $image->save();
    }

    /**
     * Create image model.
     *
     * @param \Illuminate\Http\UploadedFile $file
     */
    private function add($file)
    {
        $this->relationship->create($this->path($file));
    }

    /**
     * The image path.
     *
     * @param  \Illuminate\Http\UploadedFile $file
     * @return array
     */
    protected function path($file)
    {
        return [
            $this->pathAttribute => $this->makeStoragePath($file)
        ];
    }

    /**
     * The storage path.
     *
     * @param  \Illuminate\Http\UploadedFile $file
     * @return \Illuminate\Http\UploadedFile
     */
    private function makeStoragePath($file = null)
    {
        return optional($file)->store($this->disk);
    }
}
