<?php

namespace App\Utilities;

class AbstractDelete
{
    /**
     * The model.
     *
     * @var \App\Model
     */
    protected $model;

    /**
     * Delete one/multiple record(s).
     *
     * @param  mixed $data
     *
     */
    public function delete($data)
    {
        is_array($data) ? $this->model::destroy($data) : $data->delete();
    }
}