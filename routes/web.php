<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/get-user',[UserController::class,'getUser'])->name('getUser');
Route::post('/add-user',[UserController::class,'addUser'])->name('addUser');
Route::post('/delete-user',[UserController::class,'deleteUser'])->name('deleteUser');
