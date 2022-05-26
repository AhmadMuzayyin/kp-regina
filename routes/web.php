<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokenController;
use Illuminate\Routing\RouteGroup;

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
    return redirect('/signin');
});
Route::get('/signin', function () {
    return view('singin');
})->name('login');
Route::get('/signup', function () {
    return view('singup');
});
Route::controller(TokenController::class)->group(function () {
    Route::post('/token', 'login');
    Route::post('/logout', 'logout');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/jamaah', 'index');
        Route::post('/admin/jamaah', 'store');
        Route::get('/admin/jamaah/{id}', 'edit');
        Route::put('/admin/jamaah/{id}/update', 'update');
    });
});

Route::middleware(['auth', 'pimpinan'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/pimpinan/dashboard', 'index');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/pimpinan/jamaah', 'index');
        Route::post('/pimpinan/jamaah', 'store');
    });
});
