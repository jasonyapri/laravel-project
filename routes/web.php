<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/user/add', [UserController::class, 'addUser']);
Route::post('/user/add', [UserController::class, 'addUserAction']);

Route::get('/user/edit/{userId?}', [UserController::class, 'editUser']);
Route::post('/user/editAction/{userId?}', [UserController::class, 'editUserAction']);

Route::get('/user/remove/{userId?}', [UserController::class, 'removeUser']);

Route::get('/user/callApi', [UserController::class, 'callApi']);

//----------------------------


Route::get('/student', [StudentController::class, 'index']);

Route::post('/student/create', [StudentController::class, 'createStudent']);

Route::get('/student/edit/{id}', [StudentController::class, 'editStudent']);
Route::post('/student/edit/{id}', [StudentController::class, 'editStudentAction']);

Route::get('/student/delete/{id}', [StudentController::class, 'deleteStu1dent']);

Route::get('/testHelperClass', [StudentController::class, 'testHelperClass']);

//-----------------------------

Route::get('/admins', [AdminController::class, 'fetchAdmins']);

