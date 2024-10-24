@extends('master')

@section('title', 'Block SOS')

@section('content')
<section class="hero">
    <img alt="Block SOS Hero Image" src="https://storage.googleapis.com/a1aa/image/wfNB1ojcl6w8GqxOZ2isXSrKPQzLbovjCTb90yw6eak7E2pTA.jpg"/>
</section>
<section class="content">
    <h2>CATEGORÍAS DE DONACIONES</h2>
    <p>GRACIAS POR APOYAR</p>
    <div class="donation-category">
        <img alt="Imagen de Ejemplo1" src="https://storage.googleapis.com/a1aa/image/cR25yp1sEQLCPBv4BolgVhkrnKdeNGWrP1VyLdyeIXyeJsTnA.jpg"/>
        <div class="details">
            <h3>Categoria1</h3>
            <p>Sorry, but the advert has to be say. Add main takeaway points, quotes, credentials, or even a very very very short summary.</p>
            <a class="btn" href="{{ route('listafundaciones') }}">Ver Fundaciones</a>
        </div>
        <div class="details">
            <h3>Categoria2</h3>
            <p>Sorry, but the advert has to be say. Add main takeaway points, quotes, credentials, or even a very very very short summary.</p>
            <a class="btn" href="{{ route('listafundaciones') }}">Ver Fundaciones</a>
        </div>
        <div class="details">
            <h3>Categoria3</h3>
            <p>Sorry, but the advert has to be say. Add main takeaway points, quotes, credentials, or even a very very very short summary.</p>
            <a class="btn" href="{{ route('listafundaciones') }}">Ver Fundaciones</a>
        </div>
        <div class="amount">
            <p>Cantidad a Donar</p>
            <p>$0 - $10</p>
            <a class="btn" href="#">Muchas Gracias!</a>
        </div>
    </div>
    <!-- Repite las secciones de donación según sea necesario -->
    <div style="text-align: center; margin-top: 20px;">
        <a class="btn" href="#">DONAR</a>
    </div>
</section>
@endsection
