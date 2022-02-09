<?php

use App\Http\Controllers\Livewire\Enable2FaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
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

require_once( __DIR__ . '/jetstream.php');

Route::get('/', function () {
    return auth()->user() !== null ? redirect(route('dashboard')) : redirect(route('login'));
});


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::get('/user/profile/enable2-fa', [Enable2FaController::class, 'show'])->name('user.profile.enable2fa');

    Route::group(['middleware' => ['has2FaEnabled']], function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');

        // Users
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    });



});


