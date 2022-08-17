<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\models\User;

class RolesRepository extends Repository
{
    protected $model;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Address $address) {
        $this->model = $address;
    }
}
