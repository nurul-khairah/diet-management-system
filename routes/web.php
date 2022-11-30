<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BmiCalcController;
use App\Http\Controllers\BmrCalcController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CalorieController;
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

Route::get('/user.homedashboard', function () {
    return view('user.homedashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/bmrcalc', function () {
    return view('bmrcalc');
});

Route::get('/bmicalc', function () {
    return view('bmicalc');
});

Route::get('/1200calories', function () {
    return view('1200calories');
});

Route::get('/1200calories1', function () {
    return view('1200calories1');
});

Route::get('/1200calories2', function () {
    return view('1200calories2');
});

Route::get('/1200calories3', function () {
    return view('1200calories3');
});

Route::get('/1500calories', function () {
    return view('1500calories');
});

Route::get('/1500calories1', function () {
    return view('1500calories1');
});

Route::get('/1500calories2', function () {
    return view('1500calories2');
});

Route::get('/1500calories3', function () {
    return view('1500calories3');
});

Route::get('/1800calories', function () {
    return view('1800calories');
});

Route::get('/1800calories1', function () {
    return view('1800calories1');
});

Route::get('/1800calories2', function () {
    return view('1800calories2');
});

Route::get('/1800calories3', function () {
    return view('1800calories3');
});

Route::get('/2000calories', function () {
    return view('2000calories');
});

Route::get('/2000calories1', function () {
    return view('2000calories1');
});

Route::get('/2000calories2', function () {
    return view('2000calories2');
});

Route::get('/2000calories3', function () {
    return view('2000calories3');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/search',[SearchController::class, 'search'])->name('web.search');
Route::get('/find',[SearchController::class, 'find'])->name('web.find');

Route::get('/bmicalculation', [BmiCalcController::class, 'index'])->name('bmicalculation');
Route::get('/bmrcalculation', [BmrCalcController::class, 'index'])->name('bmrcalculation'); 
 



