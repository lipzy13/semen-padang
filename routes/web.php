<?php

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
    return view('index');
})->name('main')->middleware('auth');

Route::get('/periksa', function(){
    return view('periksa');
})->name('periksa')->middleware('auth');

Route::get('/history', function(){
    return view('history');
})->name('history')->middleware('auth');

Route::get('/pusat-bantuan', function(){
    return view('help');
})->name('help')->middleware('auth');

Route::get('/basic-maintenance', [\App\Http\Controllers\basicMaintenanceController::class, 'index'])
    ->name('basicMaintenance')->middleware('auth');

Route::get('/tambah-area', [\App\Http\Controllers\tambahAreaController::class, 'index'])
    ->name('tambah-area')->middleware('auth');
Route::get('/tambah-route', [\App\Http\Controllers\tambahRouteController::class, 'index'])
    ->name('tambah-route')->middleware('auth');
Route::get('/tambah-alat', [\App\Http\Controllers\tambahAlatController::class, 'index'])
    ->name('tambah-alat')->middleware('auth');


Route::get('/profile', [\App\Http\Controllers\ProfilController::class, 'index'])->name('profile');
Route::put('/profile', [\App\Http\Controllers\ProfilController::class, 'save'])->name('profileEdit');

Route::get('/basic-maintenance/download', [\App\Http\Controllers\basicMaintenanceController::class, 'export']);
Route::get('/basic-maintenance/delete', [\App\Http\Controllers\basicMaintenanceController::class, 'delete']);
Route::get('/work-order/delete', [\App\Http\Controllers\workOrderController::class, 'delete']);
Route::get('/work-order/download', [\App\Http\Controllers\workOrderController::class, 'export']);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/profil', [\App\Http\Controllers\ProfilController::class, 'index'])->middleware('auth');

Route::get('/work-order', [\App\Http\Controllers\workOrderController::class, 'index'])->middleware('auth');
Route::post('/work-order', [\App\Http\Controllers\workOrderController::class, 'store']);
Route::post('/tambah-area', [\App\Http\Controllers\tambahAreaController::class, 'store']);
Route::post('/tambah-route', [\App\Http\Controllers\tambahRouteController::class, 'store']);
Route::post('/tambah-alat', [\App\Http\Controllers\tambahAlatController::class, 'store']);

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('registrasi');

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register']);
