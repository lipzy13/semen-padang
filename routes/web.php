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
})->name('main');

Route::get('/periksa', function(){
    return view('periksa');
})->name('periksa');

Route::get('/history', function(){
    return view('history');
})->name('history');

Route::get('/pusat-bantuan', function(){
    return view('help');
})->name('help');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/form-admin', function(){
   return view('formAdmin');
});

Route::get('/work-order', [\App\Http\Controllers\workOrderController::class, 'index']);
Route::post('/work-order', [\App\Http\Controllers\workOrderController::class, 'store']);

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('registrasi');

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register']);
