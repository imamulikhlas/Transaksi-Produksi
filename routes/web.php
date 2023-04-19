<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('/dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('dashboard/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('dashboard/create', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('dashboard/view', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
Route::get('dashboard/view', [App\Http\Controllers\HomeController::class, 'show'])->name('show');

Route::get('dashboard/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::put('dashboard/edit/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::delete('dashboard/view/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy');

