<?php

use App\Http\Controllers\KandidatController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/kandidat', \App\Http\Controllers\KandidatController::class);
Route::resource('/jurusan', \App\Http\Controllers\JurusanController::class);