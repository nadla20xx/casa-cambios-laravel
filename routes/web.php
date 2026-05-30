<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiposCambiosControlador;

Route::get('/', function () {
    return View("inicio");
});

Route::get('/nosotros', function () {
    return View("nosotros");
});

Route::get('/servicios', function () {
    return View("servicios");
});

Route::get('/contacto', function () {
    return View("contacto");
});


Route::prefix('administrador')->group(function () {
    Route::get('/tipos-cambios', [TiposCambiosControlador::class, 'VerReporteTiposCambio']);
});