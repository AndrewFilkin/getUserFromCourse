<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table = 'students';

    public $timestamps = false;


    protected $fillable = [
        'identifier',
        'loginUser',
        'passUser',
        'fullNameUser',
        'userNickname',
        'passForUser',
        'platformPw',
        'databasePlatformNamePw',
        'databasePlatformUserPw',
        'databasePlatformPassPw',
        'platformIw',
        'databasePlatformNameIw',
        'databasePlatformUserIw',
        'databasePlatformPassIw',
    ];

}
