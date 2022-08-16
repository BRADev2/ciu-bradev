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

    public function show($wheres) {
        return $this->model->where($wheres)->get();
    }

    public function update($id, $data) {
        return $this->model->where("id", $id)->update($data);
    }

    public function delete($id) {
        return $this->model->delete("id", $id);
    }

    public function store($data) {
        return $this->model->create($data);
    }
}
