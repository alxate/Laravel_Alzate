<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes', [ControladorCliente::class, 'lista']); //lista todos los clientes
Route::get('/clientes/{id}',[ControladorCliente::class, 'cliente']); //obtiene un cliente
Route::post('/clientes',[ControladorCliente::class, 'crear']); //creando un cliente
Route::put('/clientes/{id}',[ControladorCliente::class,  'actualizar']); //actualiza un cliente
Route::delete('/clientes/{id}',[ControladorCliente::class,  'eliminar']); //elimina un cliente


