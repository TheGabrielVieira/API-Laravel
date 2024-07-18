<?php

use App\Http\Controllers\BandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/hello/{name}', function (Request $request, $name) {
    return "hello " . $name;
});

Route::get('/bands', [BandController::class, 'getAll']);

Route::post('/bands/store', [BandController::class, 'store']);

Route::get('/bands/{id}', [BandController::class, 'getById']);

Route::get('/bands/gender/{gender}', [BandController::class, 'getBandsByGender']);