<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiposCambiosControlador;
use App\Http\Controllers\UsuariosControlador;
use App\Http\Middleware\VerificarAccesoWebMiddleware;

use Illuminate\Support\Facades\Auth;

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
})->name("login");

Route::middleware([VerificarAccesoWebMiddleware::class])->group(function () {
    Route::prefix('administrador')->group(function () {
        Route::get('/tipos-cambios', [TiposCambiosControlador::class, 'VerReporteTiposCambio'])->name('administrador-tipos-cambio');
        Route::get('/usuarios', [UsuariosControlador::class, 'VerReporteUsuarios'])->name('administrador-usuarios');
    });
});


Route::post('/verificar-accesos', [TiposCambiosControlador::class, 'VerificarAccesos'])->name('verificar-accesos');
Route::get('/cerrar-session', [TiposCambiosControlador::class, 'CerrarSession'])->name('cerrar-session');
