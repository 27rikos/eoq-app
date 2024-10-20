<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EoqController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('produk', ProdukController::class);
    Route::resource('order', OrderController::class);
    Route::get('eoq', [EoqController::class, 'index'])->name('eoq.index');
    Route::get('report', [ReportController::class, 'index'])->name('report.index');
    Route::post('import', [ProdukController::class, 'import'])->name('import');
});
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('authenticate', [AuthController::class, 'auth'])->name('auth');