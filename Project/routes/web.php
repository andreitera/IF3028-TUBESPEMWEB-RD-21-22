<?php

use App\Http\Controllers\LaporanController;
use App\Models\Laporan;
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

Route::get('/', [LaporanController::class, 'index'])->name('laporan.request.index');
Route::get('/create', [LaporanController::class, 'showCreateView'])->name('laporan.request.create');
Route::get('/about', [LaporanController::class, 'showAboutView'])->name('laporan.request.about');
Route::get('/{id}', [LaporanController::class, 'showLaporan'])->name('laporan.request.show');
Route::get('edit/{id}', [LaporanController::class, 'showEditView'])->name('laporan.request.edit');


Route::post('/api/update/', [LaporanController::class, 'updateLaporan'])->name('laporan.request.update');
Route::post('/api/store', [LaporanController::class, 'store'])->name('laporan.request.store');
Route::delete('/{id}', [LaporanController::class, 'deleteLaporan'])->name('laporan.request.delete');

