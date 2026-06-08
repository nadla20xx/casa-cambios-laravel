<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiposCambiosControlador;
use App\Http\Controllers\UsuariosControlador;

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

Route::get('/login', function () {
    return View("administrador.login");
});


Route::prefix('administrador')->group(function () {
    Route::get('/tipos-cambios', [TiposCambiosControlador::class, 'VerReporteTiposCambio'])->name('administrador-tipos-cambio');
    Route::get('/usuarios', [UsuariosControlador::class, 'VerReporteUsuarios'])->name('administrador-usuarios');
});

