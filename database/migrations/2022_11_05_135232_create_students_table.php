<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('identifier')->nullable();
            $table->string('loginUser')->nullable();
            $table->string('passUser')->nullable();
            $table->string('fullNameUser')->nullable();
            $table->string('userNickname')->nullable();
            $table->string('passForUser')->nullable();

            $table->string('platformPw')->nullable();
            $table->string('databasePlatformNamePw')->nullable();
            $table->string('databasePlatformUserPw')->nullable();
            $table->string('databasePlatformPassPw')->nullable();

            $table->string('platformIw')->nullable();
            $table->string('databasePlatformNameIw')->nullable();
            $table->string('databasePlatformUserIw')->nullable();
            $table->string('databasePlatformPassIw')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};