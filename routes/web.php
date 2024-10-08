<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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

// Route default ke login jika belum login
Route::get('/', function () {
    return redirect()->route('login');
});

// Rute untuk login dan registrasi
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/register', [AuthController::class, 'postRegister'])->name('postRegister');

// Rute setelah login
Route::get('/user/home', [AuthController::class, 'userHome'])->name('user.home');
Route::get('/admin/home', [AuthController::class, 'adminHome'])->name('admin.home');

// Product / Produk
Route::get('/produk', [ProductController::class, 'listProduk'])->name('produk.list');
Route::get('/admin/produk/tambah', [ProductController::class, 'create'])->name('produk.create');
Route::post('/admin/produk', [ProductController::class, 'store'])->name('produk.store');
Route::get('/admin/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/admin/produk/{id}', [ProductController::class, 'update'])->name('produk.update');

// Orders / Pemesanan
Route::get('/admin/pemesanan', [OrderController::class, 'index'])->name('pemesanan.index');
Route::get('/admin/pemesanan/{id}/edit', [OrderController::class, 'edit'])->name('pemesanan.edit');
Route::put('/admin/pemesanan/{id}', [OrderController::class, 'update'])->name('pemesanan.update');
Route::delete('/admin/pemesanan/{id}', [OrderController::class, 'destroy'])->name('pemesanan.destroy');

// Rute untuk mengotentikasi login
Route::post('/auth/login', [AuthController::class, 'postLogin'])->name('auth.login');

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/update-password/daus', [AuthController::class, 'updatePasswordForDaus'])->name('updatePasswordForDaus');

// Rute yang memerlukan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/admin', [ProductController::class, 'index'])->name('admin');
    Route::get('/produk', [ProductController::class, 'listProduk'])->name('produk.list');
    Route::get('/produk/tambah', [ProductController::class, 'create'])->name('produk.create');
    Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');
    Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
    Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');
    Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');

    // Rute setelah login
    Route::get('/user/home', [AuthController::class, 'userHome'])->name('user.home');
    Route::get('/admin/home', [AuthController::class, 'adminHome'])->name('admin.home');
});
