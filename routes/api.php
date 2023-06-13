<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EletrodomesticoController;

Route::get('/eletrodomesticos', [EletrodomesticoController::class, 'index']);
Route::post('/eletrodomesticos', [EletrodomesticoController::class, 'store']);
Route::get('/eletrodomesticos/{id}', [EletrodomesticoController::class, 'show']);
Route::put('/eletrodomesticos/{id}', [EletrodomesticoController::class, 'update']);
Route::delete('/eletrodomesticos/{id}', [EletrodomesticoController::class, 'destroy']);