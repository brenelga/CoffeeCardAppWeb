@extends('layout')

@section('titulo', 'CoffeeCard - Inicio')
@section('url', 'cofeecard.proyectos-idgs-23s.com/index')

@section('contenido')
<!-- Banner Section -->
<section id="banner" class="text-center text-white bg-dark py-5">
    <div class="container">
        <div class="contenido-banner">
            <h1 class="display-4"><span>CoffeeCard</span></h1>
            <p class="lead">Una nueva oportunidad para el sistema de pagos</p>
            <a href="login.html" class="btn btn-primary btn-lg mt-3">Empezar</a>
        </div>
    </div>
</section>

<!-- Información Section -->
<section id="informacion" class="py-5">
    <div class="container">
        <div class="row text-center">
            <!-- Tarjeta Inteligente -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="img/tarjeta.jpg" class="card-img-top" alt="Tarjeta Inteligente">
                    <div class="card-body">
                        <h5 class="card-title">Tu tarjeta inteligente</h5>
                        <p class="card-text">Con la tarjeta CoffeeCard podrás realizar pagos en la cafetería de forma fácil.</p>
                    </div>
                </div>
            </div>
            <!-- Recarga tu tarjeta -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <img src="img/pago.jpg" class="card-img-top" alt="Pago">
                    <div class="card-body">
                        <h5 class="card-title">Recarga tu tarjeta fácilmente</h5>
                        <p class="card-text">Puedes recargar tu tarjeta en PayPal y en efectivo desde la cafetería.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
