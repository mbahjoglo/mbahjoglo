<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekHargaController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('home', function () {
    return view('index');
});

Route::get('tentang', function () {
    return view('tentang');
});

Route::get('layanan', function () {
    return view('layanan');
});

Route::get('cekharga', function () {
    return view('cekharga');
});

Route::get('/cekharga', [CekHargaController::class, 'index']);
Route::post('/cekharga', [CekHargaController::class, 'hitung']);

Route::get('galeri', function () {
    return view('galeri');
});

Route::get('kontak', function () {
    return view('kontak');
});
