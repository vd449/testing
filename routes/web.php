<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('persons',[PersonController::class,'getData']);

//Route::view('login','users');
//route::view('login','users');

route::view('user','users');

route::post('users',[UserController::class,'index']);

route::view('profile','profile');

route::get('/login',function (){
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return redirect('user');
});

route::get('/logout',function (){
    if(session()->has('user'))
    {
        session()->pull('user');
        return redirect('user');
    }
    else
    {
        return redirect('user');
    }
});
Route::get('list',[MemberController::class,'show']);
Route::view('upload','upload');

Route::post('uploadfile',[UploadController::class,'index']);
