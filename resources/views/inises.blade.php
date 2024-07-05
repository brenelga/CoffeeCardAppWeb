@extends('layout')
@section('titulo', 'Iniciar Sesión')
@section('url', 'cofeecard.proyectos-idgs-23s.com/inises')
@section('contenido')
    <form method="post" action="sesion">
        @csrf

        <label id="Uslbl">Usuario</label><input type="number" name="Usuario" id="Usuario"><br>
        <label id="Psslbl">Contraseña</label><input type="password" name="Contrasena" id="Contrasena"><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
@endsection