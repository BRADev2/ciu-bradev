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
        $wheres = is_array($wheres) ? $wheres : $wheres->all();
        if($wheres) {
            $this->model = $this->model->where($wheres);
        }
        return $this->model->get();
    }

    public function update($id, $data) {
        $data = is_array($data) ? $data : $data->all();
        return $this->model->where('id', $id)->update($data);
    }

    public function delete($id) {
        return $this->model->find($id)->delete();
    }

    public function store($data) {
        $data = is_array($data) ? $data : $data->all();
        return $this->model->create($data);
    }

    protected function whereSpecial($wheres, $colum, $value, $condition) {
        if($wheres[$colum]) {
            $whereLikeName = [$colum, $condition, $value];
            unset($wheres[$colum]);
            array_push($wheres, $whereLikeName);
        }
        return $wheres;
    }
}
