<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowUserDataController;
use App\Http\Controllers\ExportImportStudentsController;
use App\Http\Controllers\LoginCuratorController;
use App\Http\Controllers\Students\CreateStudentController;


Route::get('/', function () {
    return view('searchUserDataForm');
});

Route::get('students/export/', [ExportImportStudentsController::class, 'exportStudentsToExcel'])->name('export.students');
Route::get('students/import/', [ExportImportStudentsController::class, 'importStudentsToExcel'])->name('import.students');


Route::post('/showUserData', [ShowUserDataController::class, 'showUserData'])->name('showUserData');
Route::put('update-student-status/{id}', [ShowUserDataController::class, 'updateStudentStatus'])->name('updateStudentStatus');


Route::get('/login', [LoginCuratorController::class, 'index'])->name('login.curator');
Route::post('/login/checklogin', [LoginCuratorController::class, 'checkLogin'])->name('checkLogin');
Route::get('/logout', [LoginCuratorController::class, 'logout'])->name('logout');

Route::get('/createAccount', [CreateStudentController::class, 'createAccount'])->name('createAccount');
