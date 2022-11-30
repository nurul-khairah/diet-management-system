<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BmiCalcController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});


Route::post('/auth.save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth.check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth.logout',[MainController::class, 'logout'])->name('auth.logout');

Route::group(['middleware'=> ['AuthCheck']], function(){

    Route::get('/auth.login',[MainController::class,'login'])->name('auth.login');
    Route::get('/auth.register',[MainController::class, 'register'])->name('auth.register');

    Route::get('/user.dashboard',[MainController::class, 'dashboard']);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/calorie', function () {
    return view('calorie');
});


