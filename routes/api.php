<?php
use App\Http\Controllers\ReadingController; //agregamos la importación del controlador ReadingController para poder utilizarlo en las rutas.
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('/readings', [ReadingController::class, 'store']);
Route::get('/readings', [ReadingController::class, 'index']); //ruta del método index del ReadingController para obtener todas las lecturas almacenadas en la base de datos.

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
