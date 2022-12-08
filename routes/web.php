<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowUserDataController;
use App\Http\Controllers\ExportImportStudentsController;
use App\Http\Controllers\LoginCuratorController;





Route::get('/', function () {
    return view ('searchUserDataForm');
});

Route::get('students/export/', [ExportImportStudentsController::class, 'exportStudentsToExcel'])->name('export.students');
Route::get('students/import/', [ExportImportStudentsController::class, 'importStudentsToExcel'])->name('import.students');


Route::post('/showUserData', [ShowUserDataController::class, 'showUserData'])->name('showUserData');


Route::get('/login', [LoginCuratorController::class, 'index'])->name('login.curator');
Route::post('/login/checklogin', [LoginCuratorController::class, 'checkLogin'])->name('checkLogin');
Route::get('/logout', [LoginCuratorController::class, 'logout'])->name('logout');
