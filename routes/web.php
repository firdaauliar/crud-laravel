<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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
//     return view('welcome');
// });

// menampilkan data
Route::get('/',[MahasiswaController::class, 'index'])->name('mahasiswa');

// memasukkan data
Route::get('/tambahdata',[MahasiswaController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[MahasiswaController::class, 'insertdata'])->name('insertdata');

// mengubah data
Route::get('/tampildataid/{id}',[MahasiswaController::class, 'tampildataid'])->name('tampildataid');
Route::post('/updatedata/{id}',[MahasiswaController::class, 'updatedata'])->name('updatedata');

// hapus data
Route::get('/deletedata/{id}',[MahasiswaController::class, 'deletedata'])->name('deletedata');

Route::get('/exportpdf',[MahasiswaController::class, 'exportpdf'])->name('exportpdf');