<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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
Auth::routes();

Route::get('/', [CategoryController::class, 'index']) ->name('list');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/dashboard/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/admin/dashboard/ads', [AdminController::class, 'ads'])->name('admin.ads');

    Route::get('/admin/edit_user/{user}', [AdminController::class, 'editUser'])->name('user.edit');
    Route::patch('/admin/update_user/{user}', [AdminController::class, 'updateUser']) ->name('user.update');

    Route::get('/admin/edit_ad/{ad}', [AdminController::class, 'editAd'])->name('ad.edit');
    Route::patch('/admin/update_ad/{ad}', [AdminController::class, 'updateAd'])->name('ad.update');
});

Route::group(['middleware' => ['auth', 'check.banned']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/ads/create/{selected?}', [AdController::class, 'create'])->name('ad.create');
    Route::post('/ads/create', [AdController::class, 'store'])->name('ad.store');
});

Route::get('/ads/{ad}', [AdController::class, 'show'])->name('ad.show');
Route::get('/categories/{category}', [CategoryController::class, 'sublist'])->name('sublist');
Route::get('/{category}/{subcategory}', [AdController::class, 'advts'])->name('advts');


