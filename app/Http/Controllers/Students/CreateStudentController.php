<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Guzzle;
use App\Services\CreateStudentsThroughApi;

class CreateStudentController extends Controller
{

    protected $authKey;

    public function createAccount()
    {
        $obj = new CreateStudentsThroughApi();
        $this->authKey = $obj->getKey();

    }
}
