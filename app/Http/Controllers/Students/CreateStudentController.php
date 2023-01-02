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
        $obj->createUserProfile($this->authKey, 'userqwer', 'Surname Name MiddleName', 'h57sP97RFe', 'pw925193.sprint.1t.ru');

    }
}
