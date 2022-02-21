<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::group(['middleware'=>['AuthCheck']], function(){

// });
Route::get('/userapi', [CustomerController::class, 'userapi']);
Route::post('/deleteapi/{id}', [CustomerController::class, 'deleteapi']);
Route::get('/editapi/{id}', [CustomerController::class, 'finddata']);
Route::post('/updatecustomerapi', [CustomerController::class, 'updatecustomer']); 
