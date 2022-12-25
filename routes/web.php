<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/dashboard',function () {
    return view('dashboard');
});
Route::get('/user/{id}/profile',function($id){
    return view('profile');
})->name('profile');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/user/{id}/profile',[App\Http\Controllers\UserController::class, 'userProfile'])->name('profile');

//Resources
Route::resource('users', App\Http\Controllers\UserController::class);
