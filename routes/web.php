<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\HomeController;
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
Route::get('/profiles/{id}', [ProfilesController::class, 'index'])->name('profiles');
Route::get('/home/{id}', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

