<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProgramController;

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


/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('/{path?}','welcome')->where('path','.*');
Route::get('/user', [UserController::class, 'index']);
Route::post('/student_store', [StudentController::class, 'store']);
Route::post('/student_show', [StudentController::class, 'show']);
Route::post('/student_destroy', [StudentController::class, 'destroy']);
Route::post('/student_update', [StudentController::class, 'update']);
Route::get('/token', [StudentController::class, 'token']);

Route::post('/program_store', [ProgramController::class, 'store']);