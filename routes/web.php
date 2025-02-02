<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uangkasController;
use App\Http\Controllers\HomeController;

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

// uangkas
Route::resource('uangkas', uangkasController::class);
Route::get('/uangkas', [uangkasController::class, 'index'])->name('uangkas.index');
Route::get('/uangkas/create', [uangkasController::class, 'create'])->name('uangkas.create');
Route::post('/uangkas', [uangkasController::class, 'store'])->name('uangkas.store');
Route::get('/uangkas/{id}/detail', [uangkasController::class, 'detail'])->name('uangkas.detail');
Route::get('/uangkas/{id}/edit', [uangkasController::class, 'edit'])->name('uangkas.edit');
Route::put('/uangkas/{id}', [uangkasController::class, 'update'])->name('uangkas.update');
Route::delete('/uangkas/{id}', [uangkasController::class, 'destroy'])->name('uangkas.destroy');

// home
Route::get('/homes', [HomeController::class, 'index'])->name('homes');

// about
Route::get('/about', function () {
    return view('about');
});
