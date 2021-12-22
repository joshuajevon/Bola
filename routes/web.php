<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BolaController;
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
    return view('welcome');
});

Route::get('/insert', [BolaController::class, 'getCreatePage'])->name('getCreatePage');

Route::post('/insert-data', [BolaController::class, 'insertData'])->name('insertData');

Route::get('/get-data', [BolaController::class, 'getData'])->name('getData');

Route::get('/update-data/{id}', [BolaController::class, 'updateData'])->name('updateData');

Route::put('/update-bola/{id}', [BolaController::class, 'updateBola'])->name('updateBola');

Route::delete('/delete-bola/{id}', [BolaController::class, 'deleteBola'])->name('delete');


Auth::routes();

Route::get('/auth/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
