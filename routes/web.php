<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('laporan.create');
});

Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
