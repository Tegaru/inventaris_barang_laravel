<?php

use App\Http\Controllers\BarangController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang', BarangController::class);
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/tambah_barang', [BarangController::class, 'tambah'])->name('tambah');
Route::get('/simpan_barang', [BarangController::class, 'simpan'])->name('simpan');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('edit');
Route::get('/update_barang', [BarangController::class, 'update'])->name('update');
