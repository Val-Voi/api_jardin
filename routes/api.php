<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{NinosController, EducadorasController, EventosController, NivelesController};

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/ninos',NinosController::class);
Route::apiResource('/educadoras',EducadorasController::class);
Route::apiResource('/eventos',EventosController::class);
Route::apiResource('/niveles',NivelesController::class);