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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', [App\Http\Controllers\web\UserController::class, 'index'])->name('users');
Route::post('/userStore', [App\Http\Controllers\web\UserController::class, 'store'])->name('userstore');
Route::get('/userdestroy/{id}',[App\Http\Controllers\web\UserController::class, 'destroy'])->name('userdestroy');

