<?php

namespace App\Repositories;

use Illuminate\Support\Facades\App;

abstract class Repository
{
    protected $model;
    // ...
// Unhandled \Illuminate\Contracts\Container\BindingResolutionException
    public function __construct()
    {
        $this->model = app($this->model());
    }
    abstract public function model();

    public function paginate($limit=4)
    {
        return $this->model->paginate($limit);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        info('test',$data);
        return $this->model->create($data);
    }

    public function update($model, array $data)
    {
        return $model->update($data);
    }


}
