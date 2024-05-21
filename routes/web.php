<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Homepage'
    ]);
});

Route::get('/jadwal', function () {
    return view('jadwal', [
        'title' => 'Jadwal'
    ]);
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('store');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'delete']);
