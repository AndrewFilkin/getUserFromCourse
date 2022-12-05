<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Curator',
            'email' => 'curator@gmail.com',
            'password' => Hash::make('Sj93iB3Hv7'),
            'remember_token' => Str::random(10),
        ]);
    }
}