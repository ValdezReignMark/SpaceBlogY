<?php
  
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
  
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


// Route::get('/{path?}', function () {
//     return view('users');
// })->where('path','.*');

// Route::get('/{path?}', function () {
//     return view('home');
// })->where('path','.*');
  
Route::get('/', function () {
        return view('homeIndex');
    }); 


    Route::get('/usersIndex', function () {
        return view('usersIndex');
    }); 
    Route::get('/postsIndex', function () {
        return view('postsIndex');
    }); 














// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/index', function () {
//         return view('/posts/index');
//     });
// Auth::routes();
  
// Route::get('/home', [HomeController::class, 'index'])->name('home');
  
// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('users', UserController::class);
//     Route::resource('posts', PostController::class);
    
// });
// Auth::routes();


// Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create']);
// Route::post('posts.index', [App\Http\Controllers\PostController::class, 'store'])->name('posts');
// Route::get('posts/{post}/edit', [App\Http\Controllers\PostController::class, 'edit']);
// Route::get('posts/{post}', [App\Http\Controllers\PostController::class, 'show']);
// Route::put('posts/{post}', [App\Http\Controllers\PostController::class, 'update']);
// Route::delete('posts/{post}', [App\Http\Controllers\PostController::class, 'destroy']);
// Route::get('/users/logout', [App\Http\Controllers\UserController::class, 'logout']);




