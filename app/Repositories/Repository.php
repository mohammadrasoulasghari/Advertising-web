<?php

namespace App\Repositories;

abstract class Repository
{
    protected $model;
    // ...

    public function __construct()
    {
        $this->model = app($this->model());
    }
    abstract public function model();

    public function all($limit=4)
    {
        return $this->model->orderBy('id', 'desc')->paginate($limit);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($model, array $data)
    {
        return $model->update($data);
    }


}
