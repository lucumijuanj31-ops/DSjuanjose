<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí se registran las rutas web de la aplicación
|
*/

// Página principal
Route::get('/', [VistaController::class, 'index']);

// Ruta para ver la página de reservas
Route::get('/reservas', function () {
    return view('reservas');
});

// Ruta para otra vista si la necesitas
Route::get('/vista', [VistaController::class, 'vista']);