<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\models\User;

class DocumentRepository extends Repository
{
    protected $model;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Document $document) {
        $this->model = $document;
    }
}
