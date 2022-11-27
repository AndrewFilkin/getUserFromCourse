<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExportExcel;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImportExcel;

class ExportImportStudentsController extends Controller
{
    public function exportStudentsToExcel()
    {
        return Excel::download(new StudentsExportExcel, 'students.xlsx');
    }

    public function importStudentsToExcel()
    {
        Excel::import(new StudentsImportExcel, 'public/students.xlsx');

        return redirect('/')->with('success', 'All good!');
    }
}
