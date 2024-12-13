<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
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

Route::get('login', [GuestController::class, 'showLogin'])->middleware('guest')->name('login');
Route::post('login', [GuestController::class, 'submitLogin'])->middleware('guest');
Route::get('logout', [GuestController::class, 'logout'])->middleware('auth')->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [GuestController::class, 'home']);
    Route::get('dashboard', [UserController::class, 'dashboard']);

    Route::group(['prefix' => 'task'], function () {
        Route::get('assign', [TestController::class, 'assignTask']);
        Route::get('delete', [TestController::class, 'deleteTask']);
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('allowed', [UserController::class, 'allowedUser'])->can('hasPermission');
        Route::get('not-allowed', [UserController::class, 'notAllowedUser'])->can('hasPermission');
    });
});
