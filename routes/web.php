<?php

use App\Http\Controllers\OceneController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OceneController::class, 'index']);

Route::get('/dodaj-ocenu',[OceneController::class, 'dodajOcenu']);

Route::post('/upisi-ocenu',[OceneController::class, 'upisiOcenu']);
