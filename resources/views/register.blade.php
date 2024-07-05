@extends('layout')
@section('titulo', 'Registro de Beneficiarios')
@section('url', 'cofeecard.proyectos-idgs-23s.com/signin')
@section('contenido')
    <form method="post" action="reg">
        @csrf
        <label id="Nom">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="Nom">Apellido Paterno</label>
        <input type="text" name="ApPat" id="ApPat" value="{{ old('ApPat') }}">
        @error('ApPat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="Nom">Apellido Materno</label>
        <input type="text" name="ApMat" id="ApMat" value="{{ old('ApMat') }}">
        @error('ApMat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="Uslbl">Matricula</label>
        <input type="number" name="Usuario" id="Usuario" value="{{ old('Usuario') }}">
        @error('Usuario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <label id="Psslbl">Contraseña</label>
        <input type="password" name="Contrasena" id="Contrasena">
        @error('Contrasena')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        
        <input type="submit" value="Registrarse">
    </form>
@endsection
