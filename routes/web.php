<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GuestController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\WishController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;

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

Route::get('/', [AppController::class, 'index'])->name('home');

Route::post('wish', [AppController::class, 'wish'])->name('wish');

Route::get('wish', [AppController::class, 'wishList'])->name('wishList');

Route::get('join', [AppController::class, 'showConfirmForm'])->name('showConfirmForm');

// Route::post('join', [AppController::class, 'join'])->name('join');

Route::post('confirm-join', [AppController::class, 'confirmJoin'])->name('confirm');

Route::get('search-guests', [AppController::class, 'searchGuests'])->name('searchGuests');

Route::get('invitation/{guestId}', [AppController::class, 'invitation'])->name('invitation');

Route::prefix('manager')->name('admin.')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('auth.showLoginForm');
    Route::post('login', [AdminLoginController::class, 'login'])->name('auth.login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::name('manager.')->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('index');
            Route::get('/create', [AdminController::class, 'create'])->name('create');
            Route::post('/create', [AdminController::class, 'store'])->name('store');
            Route::get('{id}', [AdminController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
            Route::put('{id}', [AdminController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
            Route::delete('{id}', [AdminController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
        });
        Route::prefix('guest')->name('guest.')->group(function () {
            Route::get('/', [GuestController::class, 'index'])->name('index');
            Route::get('create', [GuestController::class, 'create'])->name('create');
            Route::post('create', [GuestController::class, 'store'])->name('store');
            Route::get('{id}', [GuestController::class, 'edit'])->name('edit')->where(['id' => '[0-9]+']);
            Route::put('{id}', [GuestController::class, 'update'])->name('update')->where(['id' => '[0-9]+']);
            Route::delete('{id}', [GuestController::class, 'delete'])->name('delete');
        });
    });
});
