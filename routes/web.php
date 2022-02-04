<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
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

Route::get('/register', [AuthController::class, 'register']);
Route::post('/registeruser', [AuthController::class, 'registeruser']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginuser', [AuthController::class, 'loginuser']);
Route::get('/home', [AuthController::class, 'home']);
Route::get('/form', [FormController::class, 'form']);
Route::post('/formin', [FormController::class, 'formin']);
Route::get('/user', [FormController::class, 'user']);
Route::get('/delete/{id}', [FormController::class, 'delete']);
Route::get('/edit/{id}', [FormController::class, 'showdata']);
Route::post('/edit', [FormController::class, 'update']);
Route::get('/logout', [AuthController::class, 'logout']);








