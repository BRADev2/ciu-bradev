<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\models\User;

class Repository
{
    protected $model;

    public function find($id) {
        return $this->model->find($id);
    }

    public function index($wheres) {
        return $this->model->where($wheres)->get();
    }

    public function update($wheres, $data) {
        return $this->model->where($wheres)->update($data);
    }

    public function delete($wheres, $data) {
        return $this->model->delete($wheres);
    }

    public function store($data) {
        return $this->model->create($data);
    }
}
