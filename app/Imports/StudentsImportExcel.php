<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImportExcel implements ToModel
{

    public function model(array $row)
    {
        return new Student([
            'identifier'             => $row[0],
            'fullNameUser'           => $row[1],
            'loginUser'              => $row[2],
            'passUser'               => $row[3],
            'userNickname'           => $row[4],
            'passForUser'            => $row[5],
            'platformPw'             => $row[6],
            'databasePlatformNamePw' => $row[7],
            'databasePlatformUserPw' => $row[8],
            'databasePlatformPassPw' => $row[9],
            'platformIw'             => $row[10],
            'databasePlatformNameIw' => $row[11],
            'databasePlatformUserIw' => $row[12],
            'databasePlatformPassIw' => $row[13],
        ]);
    }
}
