<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TiposCambiosControlador;
use App\Http\Controllers\UsuariosControlador;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('tipo-cambio')->group(function () {
    Route::get('/', [TiposCambiosControlador::class, 'index']);
    Route::get('/{id}', [TiposCambiosControlador::class, 'show']);
    Route::delete('/{id}', [TiposCambiosControlador::class, 'delete']);
    Route::post('/', [TiposCambiosControlador::class, 'store']);
    Route::put('/{id}',[TiposCambiosControlador::class,'update']);

    Route::get('/recuperar-tipo-cambio-fecha/{fecha_cambio}', [TiposCambiosControlador::class, 'RecuperarTipoCambioFecha']);
});

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuariosControlador::class, 'index']);
    Route::get('/{id}', [UsuariosControlador::class, 'show']);
    Route::delete('/{id}', [UsuariosControlador::class, 'delete']);
    Route::post('/', [UsuariosControlador::class, 'store']);
    Route::put('/{id}',[UsuariosControlador::class,'update']);
});

Route::post('/verificar-accesos', [TiposCambiosControlador::class, 'VerificarAccesos'])->name('verificar-accesos');