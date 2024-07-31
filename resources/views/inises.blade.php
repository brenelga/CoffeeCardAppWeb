@extends('layout')
@section('titulo', 'Inicio de Sesión')
@section('url', 'cofeecard.proyectos-idgs-23s.com/index')
@section('contenido')
    <form method="post" action="/sesion">
        <label id="Uslbl">Usuario</label>
        <input type="number" name="Usuario" id="Usuario" required><br>

        <label id="Psslbl">Contraseña</label>
        <input type="password" name="Contrasena" id="Contrasena" required><br>

        <input type="submit" value="Iniciar Sesión">
    </form>
@endsection()