<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});


Auth::routes();


Route::middleware('auth')->group(function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Users Managment
    Route::prefix('mater-data')->group(function() {
        Route::get('/users', [UserController::class, 'index'])->name('user.list');
    });

});