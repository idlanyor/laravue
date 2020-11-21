<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RombelController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');;
Route::get('/single', [LandingController::class, 'single']);
// ROLE
Route::post('roleuser/update/{id}', [UserController::class,'update'])->name('roleuser.apdet');
Route::post('roleuser/delete/{id}', [UserController::class,'destroy'])->name('roleuser.buang');
// KELAS
Route::post('kelas/delkelas/{id}', [KelasController::class,'delete'])->name('kelas.buang');
// JURUSAN
Route::post('jurus', [KelasController::class,'storejurus'])->name('jurus.store');
Route::post('kelas/deljurus/{id}', [KelasController::class,'destroy'])->name('jurus.buang');
// ROMBEL
Route::post('rombel/delrombel/{id}', [RombelController::class,'destroy'])->name('rombel.buang');
//DASHBOARD
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
// admin grup
Route::resource('admin/roleuser', UserController::class);
Route::resource('admin/datasource/kelas', KelasController::class);
Route::resource('admin/datasource/rombel', RombelController::class);
