<?php

use Illuminate\Support\Facades\Route;

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
