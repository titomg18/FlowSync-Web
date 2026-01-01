<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportPredictionController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/predict-transport', [TransportPredictionController::class, 'predict']);
