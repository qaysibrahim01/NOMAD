<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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

Route::view('/',"mainpage")->name('home');

//Route::view('/',"bali")->name('bali');


Route::get('/login',[AuthController::class,'login'])
->name('login');
Route::post('/login',[AuthController::class,'loginPost'])
->name('login.post');

Route::get('/register',[AuthController::class,'register'])
->name('register');
Route::post('/register',[AuthController::class,'registerPost'])
->name('register.post');



Route::get('/bali', function () {
    return view('bali');
})->name('bali');


Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/bora', function () {
    return view('bora');
})->name('bora');

Route::get('/Hawaii', function () {
    return view('Hawaii');
})->name('Hawaii');

Route::get('/White', function () {
    return view('White');
})->name('White');

Route::get('/Hvar', function () {
    return view('Hvar');
})->name('Hvar');



Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
