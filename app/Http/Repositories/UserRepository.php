<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\models\User;

class UserRepository extends Repository
{
    protected $model;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user) {
        $this->model = $user;
    }
}
