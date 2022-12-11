<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExportExcel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImportExcel;
use Auth;

class ExportImportStudentsController extends Controller
{
    public function exportStudentsToExcel()
    {
        if (Auth::user()) {
            return Excel::download(new StudentsExportExcel, 'students.xlsx');
        } else {
            return redirect('/login');
        }

    }

    public function importStudentsToExcel()
    {
        if (Auth::user()) {
            Excel::import(new StudentsImportExcel, 'public/students.xlsx');

            return redirect('/')->with('success', 'All good!');
        } else {
            return redirect('/login');
        }

    }
}
