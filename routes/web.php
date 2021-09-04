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


// Route::get('/b1ContactInformation', function () {
//     return view('b1ContactInformation');
// }); 
// Route::get('/b3CompanyInformation', function () {
//     return view('b3CompanyInformation');
// }); 
// Route::get('/b2HomeInfo', function () {
//     return view('b2HomeInfo');
// }); 
// Route::get('/b1SignIn', function () {
//     return view('b1SignIn');
// }); 
Route::get('/', function () {
    return view('b0homePage');
}); 

Route::get('/b0homePage1', function () {
    return view('b0homePage1');
}); 

Route::get('/b0homePage2', function () {
    return view('b0homePage2');
}); 






    Route::get('/home', function () {
        return view('home');
    }); 



    Route::get('/hubSpotTest', function () {
        return view('hubSpotTest');
    }); 
    

    Route::get('/hubSpotTest1', function () {
        return view('hubSpotTest1');
    }); 

    Route::get('/hubSpotTest2', function () {
        return view('hubSpotTest2');
    }); 











    // Route::get('/', function () {
    //     return view('welcome');
    // });
    Route::get('/homeIndex', function () {
            return view('homeIndex');
        }); 
    Route::get('/usersIndex', function () {
        return view('usersIndex');
    }); 
    Route::get('/postsIndex', function () {
        return view('postsIndex');
    }); 
    Route::get('/authorsIndex', function () {
        return view('authorsIndex');
    }); 


    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Auth::routes();
  
Route::get('/homeIndex', [HomeController::class, 'index'])->name('/homeIndex');
  
Route::group(['middleware' => ['auth']], function() {
    Route::get('/postsIndex', function () {
        return view('postsIndex')->with([
            'id'=>Auth::user()->id,
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email
        ]);
    });

    Route::get('/homeIndex', function () {
        return view('homeIndex')->with([
            'id'=>Auth::user()->id,
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email
        ]);
    });

    Route::get('/authorsIndex', function () {
        return view('authorsIndex')->with([
            'id'=>Auth::user()->id,
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email
        ]);
    });


    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
    
});


