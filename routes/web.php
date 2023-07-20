<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [EmployeeController::class,'index']);

Route::resource('employees', \App\Http\Controllers\EmployeeController::class);

 Route::get('/employee/export', [EmployeeController::class,'export'])->name('employee.export');
