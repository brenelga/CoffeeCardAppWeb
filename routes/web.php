<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/login', function(){
    return view('inises');
});
Route::get('/signin', function(){
    return view('register');
});

Route::post('/sesion', [UsuarioController::class, 'login']);
Route::get('/usuario', [UsuarioController::class, 'usuarioDashboard']);
Route::get('/administrador', [UsuarioController::class, 'administradorDashboard']);
Route::get('/vendedor', [UsuarioController::class, 'vendedorDashboard']);
Route::post('/reg', [UsuarioController::class, 'register']);
