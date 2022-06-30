<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{NinosController, EducadorasController, EventosController, NivelesController, Educadora_NivelController, ImagenController};

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/ninos',NinosController::class);
Route::apiResource('/educadoras',EducadorasController::class);
Route::apiResource('/eventos',EventosController::class);
Route::apiResource('/niveles',NivelesController::class);
Route::apiResource('/educadoranivel',Educadora_NivelController::class);

Route::get('/ninos/{nino}/eventos',[NinosController::class,'ninoeventos']);
Route::get('/ninos/{nino}/nivel',[NinosController::class,'ninonivel']);
Route::put('/ninos/{nino}/nivel',[NinosController::class,'updateNivel']);

Route::get('/educadoras/{educadora}/nivel',[EducadorasController::class,'educadoranivel']);

Route::get('/niveles/{nivel}/ninos',[NivelesController::class,'nivelninos']);
Route::get('/niveles/{nivel}/educadoras',[NivelesController::class,'niveleducadoras']);

Route::post('/imagen', [ImagenController::class, 'index']);
Route::get('/imagen/{imagen}', [ImagenController::class, 'getImage']);

