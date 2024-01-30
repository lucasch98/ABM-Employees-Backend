<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('index');
});

//Employees Forma vieja
/*
Route::get('/employee/store', [EmployeesController::class, 'store'])->name('employee-store');
Route::get('/employees', [EmployeesController::class, 'index'])->name('employees');
Route::get('/employee/show/{id}', [EmployeesController::class, 'show'])->name('employee-show');
Route::get('/employee/destroy/{id}',[EmployeesController::class,'destroy'])->name('employee-destroy');
Route::patch('/employee/update/{id}', [EmployeesController::class, 'update'])->name('employee-update');

//Departments
Route::get('/department/store', [DepartmentController::class, 'store'])->name('department-store');
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments');
Route::get('/department/show/{id}', [DepartmentController::class, 'show'])->name('department-show');
Route::get('/department/destroy/{id}',[DepartmentController::class,'destroy'])->name('department-destroy');
Route::patch('/department/update/{id}', [DepartmentController::class, 'update'])->name('department-update');
*/

//NUEVA FORMA DE ROUTES EN API.PHP


