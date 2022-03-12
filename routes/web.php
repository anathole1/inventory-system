<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
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
Route::get('/',function(){
    return view('welcome');
});
// Route::get('/inventory', InventController::class,'index');

Auth::routes();

Route::resource('users', UserController::class);

Route::resource('roles', RoleController::class);

Route::resource('permissions', PermissionController::class);

Route::resource('status', StatusController::class);

Route::resource('institution', InstitutionController::class);

Route::resource('department', DepartmentController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
