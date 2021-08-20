<?php

use Illuminate\Http\Request;
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
//this is aroute for the login 
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });






//users Routes *******
Route::get('/users/', [App\Http\Controllers\UserController::class, 'showUser']);
Route::post('/users/creatpost', [App\Http\Controllers\UserController::class, 'store']);
Route::post('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::post('/users/delusers/{id}', [App\Http\Controllers\UserController::class, 'destroy']);






// post ROUTES ***
Route::get('/posts/', [App\Http\Controllers\PostController::class, 'index']);
Route::post('/posts/show/{id}', [App\Http\Controllers\PostController::class, 'edit']);
Route::post('/posts/update/{id}', [App\Http\Controllers\PostController::class, 'update']);
Route::post('/posts/creatpost', [App\Http\Controllers\PostController::class, 'store']);
Route::post('/posts/delpost/{id}', [App\Http\Controllers\PostController::class, 'delete']);
Route::post('/posts/despost/{id}', [App\Http\Controllers\PostController::class, 'destroy']);



