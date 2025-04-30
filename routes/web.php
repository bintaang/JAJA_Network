<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\TSMKController;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/siswa', [TSMKController::class, 'show'])->name('siswa.show');
Route::get('/siswa/form', [TSMKController::class, 'form'])->name('siswa.form');
Route::post('/siswa', [TSMKController::class, 'store'])->name('siswa.store');
Route::get('/siswa/edit/{id}', [TSMKController::class, 'edit'])->name('siswa.edit');
Route::patch('/siswa/{id}', [TSMKController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{id}', [TSMKController::class, 'destroy'])->name('siswa.destroy');
Route::get('/homepage', [TSMKController::class, 'home'])->name('siswa.home');


require __DIR__.'/auth.php';
