<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Validator;

class ShowUserDataController extends Controller
{

    private $ckekbox_checkbox_playground;
    private $ckekbox_checkbox_manager;

    public function showUserData(Request $request)
    {
        $this->validate($request, [
            'search' => 'required|min:3'
        ]);


        $inputSearch = mb_strtolower($request->input('search'));
        $users = DB::table('students')
            ->select('*')
            ->where('fullNameUser', 'LIKE', "%$inputSearch%")
            ->get();

        if ($users->isEmpty()) {
            return redirect('/')->with('emptyStudent', 'Студент не найден!');
        }
        return view('searchUserDataForm', compact('users'));
    }

    public function updateStudentStatus(Request $request, $id)
    {
        $student = Student::find($id);
        if ($request->get('checkbox_playground') != null) {
            $this->ckekbox_checkbox_playground = 1;
        } else {
            $this->ckekbox_checkbox_playground = 0;
        }
        if ($request->get('checkbox_manager') != null) {
            $this->ckekbox_checkbox_manager = 1;
        } else {
            $this->ckekbox_checkbox_manager = 0;
        }
        $student->accessToWordpress = $this->ckekbox_checkbox_playground;
        $student->accessToIspManager = $this->ckekbox_checkbox_manager;
        $student->save();

        return redirect('/')->with('success', 'Подтверждено!');

    }


}
