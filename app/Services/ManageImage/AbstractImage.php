<?php

namespace App\Services\ManageImage;

use Storage;

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
     * Manage the model's image.
     *
     * @param  \App\Model $model
     * @param  array $data
     * @return mixed
     */
    protected abstract function manage($model, $data);

    /**
     * The image url.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Contracts\Filesystem\Filesystem
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
     * @param \Illuminate\Database\Eloquent\Relations $relationship
     */
    protected function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * Handle the image in the database.
     *
     * @param  \App\Image $image
     * @param  array $data
     */
    protected function handle($image, $data = null)
    {
        if($data) {
            $image == null ? $this->add($data) : $this->update($image, $data);
        }
    }

    /**
     * Update the image.
     *
     * @param  \App\Image $image
     * @param  array $data
     */
    private function update($image, $data)
    {
        $this->removeStoragePath($image);

        $this->save($image, $data);
    }

    /**
     * Save the image.
     *
     * @param  \App\Image $image
     * @param  array $data
     */
    private function save($image, $data)
    {
        $pathAttribute = $this->pathAttribute;

        $image->$pathAttribute = $this->makeStoragePath($data);

        $image->save();
    }

    /**
     * Create image.
     *
     * @param array $data
     */
    private function add($data)
    {
        $this->relationship->create($this->path($data));
    }

    /**
     * The image path.
     *
     * @param  array $data
     * @return string
     */
    protected function path($data)
    {
        return [
            $this->pathAttribute => $this->makeStoragePath($data)
        ];
    }

    /**
     * The storage path.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Filesystem\Filesystem
     */
    private function makeStoragePath($data = null)
    {
        return optional($data)->store($this->disk);
    }
}
