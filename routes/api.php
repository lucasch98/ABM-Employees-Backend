<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Employees nueva forma
Route::controller(EmployeesController::class)->group(function() {
    Route::get('/employees', 'index');
    Route::post('/employee', 'store');
    Route::get('/employee/{id}', 'show');
    Route::put('/employee/{id}', 'update');
    Route::delete('/employee/{id}', 'destroy');
});

//Departments nueva forma
Route::controller(DepartmentController::class)->group(function() {
    Route::get('/departments', 'index');
    Route::get('/department/{id}/employees', 'getEmployees');
    Route::post('/department', 'store');
    Route::get('/department/{id}', 'show');
    Route::put('/department/{id}', 'update');
    Route::delete('/department/{id}', 'destroy');
});
