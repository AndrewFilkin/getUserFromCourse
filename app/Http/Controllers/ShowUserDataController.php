<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class ShowUserDataController extends Controller
{
    public function showUserData(Request $request) {
        $inputSearch = mb_strtolower($request->input('search'));
        $users = DB::table('students')
            ->select('*')
            ->where('fullNameUser', 'LIKE', "%$inputSearch%")
            ->get();
//        dd($users);
        return view('searchUserDataForm', compact('users'));
    }
}
