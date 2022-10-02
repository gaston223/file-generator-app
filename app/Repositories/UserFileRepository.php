<?php

namespace App\Repositories;

use App\Interfaces\UserFileInterface;
use App\Models\UserFile;

class UserFileRepository implements UserFileInterface
{
    protected $model;

    public function __construct(UserFile $userFile)
    {
        $this->model = $userFile;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data)
    {
        return $this->model->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id)
    {
       return $this->model->findOrFail($id);
    }
}
