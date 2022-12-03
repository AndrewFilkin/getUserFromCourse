<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImportExcel implements ToModel
{

    public function model(array $row)
    {
        return new Student([
            'identifier' => $row[0],
            'fullNameUser' => $row[1],
            'loginUser' => $row[2],
            'passUser' => $row[3],
            'platformPw' => $row[4],
            'databasePlatformNamePw' => $row[5],
            'databasePlatformUserPw' => $row[6],
            'databasePlatformPassPw' => $row[7],
            'platformIw' => $row[8],
            'databasePlatformNameIw' => $row[9],
            'databasePlatformUserIw' => $row[10],
            'databasePlatformPassIw' => $row[11],
        ]);
    }
}
