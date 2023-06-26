<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomersController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoryController;
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
// Route::get('customer', [\App\Http\Controllers\Api\CustController::class,'index']);
 //Route::post('customer/post', [\App\Http\Controllers\Api\CustController::class,'store']);


Route::group(['prefix' => 'v1'], function() {

    Route::get('customers', [CustomersController::class,'index']);
    Route::post('customers/{id}', [CustomersController::class,'store']);

    Route::get('product', [ProductController::class,'index']);
    Route::post('product/{id}', [ProductController::class,'store']);
    Route::patch('product/{id}', [ProductController::class, 'update']);
    Route::delete('product/{id}', [ProductController::class, 'delete']);

    Route::get('category', [CategoryController::class,'index']);
    Route::post('category/{id}', [CategoryController::class,'store']);
    Route::patch('category/{id}', [CategoryController::class, 'update']);
    Route::delete('category/{id}', [CategoryController::class, 'delete']);

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
