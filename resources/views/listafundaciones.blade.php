@extends('master')

@section('title', 'Block SOS')

@section('content')

<section class="hero">
    <img alt="Block SOS Hero Image" height="200" src="https://storage.googleapis.com/a1aa/image/wfNB1ojcl6w8GqxOZ2isXSrKPQzLbovjCTb90yw6eak7E2pTA.jpg" width="600"/>
</section>
<section class="content">
    <h2>FUNDACIONES</h2>

    <div class="donation-category">
        <img alt="Imagen de Ejemplo1" height="100" src="https://storage.googleapis.com/a1aa/image/cR25yp1sEQLCPBv4BolgVhkrnKdeNGWrP1VyLdyeIXyeJsTnA.jpg" width="100"/>
        <div class="details">
            <h3>FUNDACION 1</h3>
            <p>Sorry, but the advert has to be say. Add main takeaway points, quotes, credentials, or even a very very very short summary.</p>
            <a class="btn" href="{{ route('datosfundacion') }}">Ver Fundacion</a>
        </div>
        <div class="amount">
            <p>Cantidad a Donar</p>
            <p>$0 - $10</p>
            <a class="btn" href="#">Muchas Gracias!</a>
        </div>
    </div>

    <div class="donation-category">
        <img alt="Imagen de Ejemplo2" height="100" src="https://storage.googleapis.com/a1aa/image/Vliabs0OymZ2J92OkxLaqtHAGadawdZvfoP8AyVKb0GdC70JA.jpg" width="100"/>
        <div class="details">
            <h3>FUNDACION 2</h3>
            <p>Sorry, but the advert has to be say. Add main takeaway points, quotes, credentials, or even a very very very short summary.</p>
            <a class="btn" href="{{ route('datosfundacion') }}">Ver Fundacion</a>
        </div>
        <div class="amount">
            <p>Cantidad a Donar</p>
            <p>$0 - $10</p>
            <a class="btn" href="#">Muchas Gracias!</a>
        </div>
    </div>

    <div class="donation-category">
        <img alt="Imagen de Ejemplo3" height="100" src="https://storage.googleapis.com/a1aa/image/AMe6eofPQrUvEoek8exjcjS4Jtdjna7f7mVkrdzCgk0YQhd6E.jpg" width="100"/>
        <div class="details">
            <h3>FUNDACION 3</h3>
            <p>Sorry, but the advert has to be say. Add main takeaway points, quotes, credentials, or even a very very very short summary.</p>
            <a class="btn" href="{{ route('datosfundacion') }}">Ver Fundacion</a>
        </div>
        <div class="amount">
            <p>Cantidad a Donar</p>
            <p>$0 - $10</p>
            <a class="btn" href="#">Muchas Gracias!</a>
        </div>
    </div>

    

    <div style="text-align: center; margin-top: 20px;">
        <a class="btn" href="#">DONAR</a>
    </div>
</section>
@endsection
