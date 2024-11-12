<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AbsensiController;

Route::resource('pegawais', PegawaiController::class);
Route::resource('absensis', AbsensiController::class);
