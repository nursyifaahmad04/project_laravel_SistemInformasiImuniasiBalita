<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBalita;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\Login;

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
    return view('dashboard');
});


/* Route CRUD Database Imunisasi Admin*/
Route::view('/create_data_balita', 'Admin/create_data_balita');
Route::get('/data_balita', [ControllerBalita::class, 'index']);
Route::post('/balita', [ControllerBalita::class, 'store']);
Route::get('/update_data_balita', [ControllerBalita::class, 'index_update']);
Route::get('/balita/edit/{id}', [ControllerBalita::class, 'edit']);
Route::post('balita/update', [ControllerBalita::class, 'update']);
Route::get('/delete_data_balita', [ControllerBalita::class, 'index_delete']);
Route::get('/balita/destroy/{id}', [ControllerBalita::class, 'destroy']);

/* Route CRUD Jadwal Admin */
Route::get('/jadwal_imunisasi_admin', [JadwalController::class, 'index']);
Route::get('/create_data_jadwal', [JadwalController::class, 'create']);
Route::get('/data_jadwal', [JadwalController::class, 'index']);
Route::post('/jadwal', [JadwalController::class, 'store']);
Route::get('/update_data_jadwal', [JadwalController::class, 'index_update']);
Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit']);
Route::post('jadwal/update', [JadwalController::class, 'update']);
Route::get('/delete_data_jadwal', [JadwalController::class, 'index_delete']);
Route::get('/jadwal/destroy/{id}', [JadwalController::class, 'destroy']);

/* Route Jadwal User */
Route::get('/jadwal_imunisasi', [ControllerBalita::class, 'join_jadwal']);


/* Route Proses Login */
Route::get('/halaman_login', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

