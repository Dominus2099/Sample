<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Company Table */
Route::get('company', [App\Http\Controllers\CompanyController::class, 'index'])->name('company');
Route::get('/company/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('company.create');
Route::get('/company/show', [App\Http\Controllers\CompanyController::class, 'show'])->name('company.show');
Route::post('/company/store', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
Route::delete('/company/delete', [\App\Http\Controllers\CompanyController::class, 'destroy'])->name('company.destroy');
Route::get('/company/edit', [App\Http\Controllers\CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/edit', [App\Http\Controllers\CompanyController::class, 'update'])->name('company.update');

/* Employee Table */
Route::get('employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee');
