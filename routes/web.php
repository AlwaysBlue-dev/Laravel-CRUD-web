<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController; //call controller

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
//routing
Route::get('/', function () {
    return view('home');
});
Route::get('/view', [RegisterController::class, 'view']);
Route::post('/register', [RegisterController::class, 'insert']);
Route::get('/view/delete/{id}', [RegisterController::class, 'delete'])->name('register.delete');
Route::get('/view/edit/{id}', [RegisterController::class, 'edit'])->name('register.edit');
Route::post('/view/update/{id}', [RegisterController::class, 'update'])->name('register.update');
Route::get('/register', [RegisterController::class, 'register']);
