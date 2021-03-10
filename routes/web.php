<?php

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
    return view('welcome');
});

Route::get('/kelola_penjualan', function () {
    return view('welcome');
});

Route::view('/dashboard', 'dashboard', ['name' => 'Asep']);

Route::get('user/{name?}', function ($name = 'Asep') {
    return "User " . $name;
})->where('name', '[A-Za-z]+')->name('regex');

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
