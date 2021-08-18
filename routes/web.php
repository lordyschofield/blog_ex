<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Controller;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::post('/p',[PostsController::class,'store']);
Route::get('/p/create',[PostsController::class,'create']);
Route::get('/p/{post}',[PostsController::class,'show']);

Route::get('/profile/{id}', [ProfilesController::class,'index'])->name('profiles.index');
Route::get('/profile/{id}/edit', [ProfilesController::class,'edit'])->name('profiles.edit');
Route::patch('/profile/{id}', [ProfilesController::class,'update'])->name('profiles.update');






