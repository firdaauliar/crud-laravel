<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // menampilkan data
Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');

// memasukkan data
Route::get('/tambahdata',[MahasiswaController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[MahasiswaController::class, 'insertdata'])->name('insertdata');

// mengubah data
Route::get('/tampildataid/{id}',[MahasiswaController::class, 'tampildataid'])->name('tampildataid');
Route::post('/updatedata/{id}',[MahasiswaController::class, 'updatedata'])->name('updatedata');

// hapus data
Route::get('/deletedata/{id}',[MahasiswaController::class, 'deletedata'])->name('deletedata');

Route::get('/exportpdf',[MahasiswaController::class, 'exportpdf'])->name('exportpdf');

// // route login
// Route::get('/', [LoginController::class, 'index']);

// // route register
// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);


});

require __DIR__.'/auth.php';
