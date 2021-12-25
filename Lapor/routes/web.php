<?php

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

// Route::get('/', function () {
//     return view('lapor.index');
// });
// Route::get('/detail', function () {
//     return view('lapor.detail');
// });
// Route::get('/edit', function () {
//     return view('lapor.edit');
// });
Route::get('/laporan', function () {
    return view('lapor.laporan');
});

Route::get('/about', function () {
    return view('about');
});



//lapor
Route::get('/', 'App\http\controllers\laporController@index');
Route::get('/tambah', 'App\http\controllers\laporController@create');
Route::get('/{lapor}', 'App\http\controllers\laporController@show');
Route::post('/', 'App\http\controllers\laporController@store');
Route::delete('/{lapor}', 'App\http\controllers\laporController@destroy');
Route::get('/{lapor}/edit', 'App\http\controllers\laporController@edit');
Route::patch('/{lapor}', 'App\http\controllers\laporController@update');
