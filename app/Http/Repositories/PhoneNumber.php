<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\models\User;

class PhoneNumberRepository extends Repository
{
    protected $model;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PhoneNumber $phoneNumber) {
        $this->model = $phoneNumber;
    }
}
