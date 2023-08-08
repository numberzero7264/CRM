<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\admin\AdminController;

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

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('login/store',[LoginController::class,'store'])->name('store');
// route::get('/','LoginController@index')->name('index');
// route::post('login/store','LoginController@store')->name('store');
Route::middleware(['checklog'])->group(function () {
    Route::get('admin',[AdminController::class,'index'])->name('admin');

});