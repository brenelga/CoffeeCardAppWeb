@extends('layout')
@section('titulo', 'Dashboard Usuario')
@section('contenido')
    <h1>Bienvenido Usuario</h1>
    <h2>Escoge la acción a realizar</h2>
    <img src="/img/recarga.jpg">
    <a href="/recarga">Recarga tu tarjeta</a>
    <img src="/img/mov.jpg">
    <a href="/cmov">Consulta de Movimientos</a>
    <a href="/logout">Cerrar Sesión</a>
@endsection
