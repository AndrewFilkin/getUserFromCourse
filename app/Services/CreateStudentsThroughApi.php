<?php

namespace App\Services;


use Illuminate\Support\Facades\Http;

class CreateStudentsThroughApi
{

    public function getKey()
    {
        $response = Http::withoutVerifying()->get('https://isp.sprint.1t.ru:1500/ispmgr', [
            'out' => 'json',
            'func' => 'auth',
            'username' => 'admin',
            'password' => 'f4GzElwo5c0$',
        ]);

        $getCodeForAuth = json_decode($response);
        $idAuth = '$id';
        $authKey = $getCodeForAuth->doc->auth->$idAuth;
        return $authKey;
    }
}
