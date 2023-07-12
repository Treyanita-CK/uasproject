<?php
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
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






Route::get('/alumni', function () {
    return view('alumni');
});
Route::get('/kegiatan', function () {
    return view('kegiatan');
});
Route::get('/prestasi', function () {
    return view('prestasi');
});
Route::get('/pengumuman', function () {
    return view('pengumuman');
});
Route::get('/', function () {
    return view('dashboard');
});


Route::get('/mahasiswa/cari',[MahasiswaController::class, 'cari']);
Route::get('/mahasiswa',[MahasiswaController::class,'index']);
Route::get('/dosen/cari',[DosenController::class, 'cari']);
Route::get('/dosen',[DosenController::class,'index']);
Route::get('/about',[MahasiswaController::class,'about']);
Route::get('/kritik',[Kritik_SaranController::class,'kritik']);
Route::post('/kritik/proses',[Kritik_SaranController::class,'proses']);

  






    




