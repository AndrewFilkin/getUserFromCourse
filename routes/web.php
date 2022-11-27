<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowUserDataController;
use App\Http\Controllers\ExportImportStudentsController;





Route::get('/', function () {
    return view ('searchUserDataForm');
});

Route::get('students/export/', [ExportImportStudentsController::class, 'exportStudentsToExcel'])->name('export.students');
Route::get('students/import/', [ExportImportStudentsController::class, 'importStudentsToExcel'])->name('import.students');


Route::post('/showUserData', [ShowUserDataController::class, 'showUserData'])->name('showUserData');
