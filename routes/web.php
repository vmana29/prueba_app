<?php

use App\Http\Controllers\ResgistrarEstudiante;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ResgistrarEstudiante::class, 'frmRegistro']);
Route::get('/resgistrarEst', [ResgistrarEstudiante::class, 'registrarEstudiante']);
Route::get('/leer', [ResgistrarEstudiante::class, 'leerDatos']);
Route::get('/actualizar', [ResgistrarEstudiante::class, 'actualizarDatos']);