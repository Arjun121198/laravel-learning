<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;


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
Route::get('/userin ', [FormController::class, 'config']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/registeruser', [AuthController::class, 'registeruser']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginuser', [AuthController::class, 'loginuser']);
Route::get('/logout', [AuthController::class, 'logout']);
// Route::group(['middleware'=>['AuthCheck']], function(){
    Route::post('/create-customer', [FormController::class, 'create']);
    Route::get('/form', [FormController::class, 'form']);
    Route::get('/user', [FormController::class, 'user']);
    Route::get('/delete/{id}', [FormController::class, 'delete']);
    Route::get('/edit/{id}', [FormController::class, 'showdata']);
    Route::post('/verify', [FormController::class, 'verify']); 
    Route::post('/edit', [FormController::class, 'update']); 
    Route::get('/home', [AuthController::class, 'home']);
// });
Route::get('/data', [MemberController::class, 'index']);
Route::get('/resetpwd', [AuthController::class, 'reset']);
Route::post('/search', [AuthController::class, 'search']);
Route::get('/opennewpassword/{id}', [AuthController::class, 'opennewpassword']);
Route::post('/createpasswordnew', [AuthController::class, 'createpasswordnew']);
Route::get('/email', [FormController::class,'sendEmail']);











