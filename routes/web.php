<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\Kegiatan;
use App\Models\Lagu;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaguController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/mig-fresh-seed', function () {
    $exitcode = Artisan::call('migrate:fresh --seed');
    return "Done";
});
Route::get('/', function () {
    return view('index');
});

Route::get('/tes', function () {
    return view('welcome');
});

Route::get('/profil', [MahasiswaController::class,'index']);

Route::get('/galeri', [KegiatanController::class,'index']);

Route::get('/lagu', [LaguController::class,'index']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/lirik/{id}', [LaguController::class, 'lirik']);

Route::get('/detail/{nim}', [MahasiswaController::class, 'show']);

Route::get('/kegiatan/{id}', [KegiatanController::class, 'show']);

