<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

//siswa
route::get('/siswa',[SiswaController::class,'index'])->name('siswa');
route::get('/tambahsiswa',[SiswaController::class,'tambahsiswa'])->name('tambahsiswa');
route::post('/inputsiswa',[SiswaController::class,'inputsiswa'])->name('inputsiswa');
route::post('/updatesiswa/{id}',[SiswaController::class,'updatesiswa'])->name('updatesiswa');
route::get('/hapussiswa/{id}',[SiswaController::class,'hapussiswa'])->name('hapussiswa');
route::get('/tampilsiswa/{id}',[SiswaController::class,'tampilsiswa'])->name('tampilsiswa');
