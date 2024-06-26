@extends('layout')
@section('titulo', 'CoffeeCard - Inicio')
@section('url', 'cofeecard.proyectos-idgs-23s.com/index')
@section('contenido')
<section id="banner">
        <div class="contenido-banner">
            <h3><span>CoffeeCard </span>Una nueva oportunidad<br>
            Para el sistema de pagos</h3>
            <a href="login.html" class="boton-empezar">Empezar</a>
        </div>
    </section>
    <section id="información">
        <div>
            <img src="img/tarjeta.jpg" alt="">
            <h4>Tu tarjeta inteligente</h4>
            <p>Con la tarjeta CoffeeCard podrás realizar pagos en la cafetería de forma fácil</p>
        </div>
        <div>
            <img src="img/pago.jpg" alt="">
            <h4>Recarga tu tarjeta fácilmente</h4>
            <p>Puedes recargar tu tarjeta en PayPal y en efectivo desde la cafetería</p>
        </div>
    </section>
@endsection