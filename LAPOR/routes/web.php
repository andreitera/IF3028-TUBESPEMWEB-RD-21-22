<?php

use App\Http\Controllers\laporanController;
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

Route::get('/', [laporanController::class, 'index'])->name('index');
Route::get('/lapor', [laporanController::class, 'create'])->name('create');
Route::post('/lapor', [laporanController::class, 'store'])->name('store');
Route::get('/laporan/{id}', [laporanController::class, 'show'])->name('show');
Route::post('/delete/{id}', [laporanController::class, 'destroy'])->name('destroy');
