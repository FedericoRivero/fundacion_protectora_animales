<!-- Header -->
@include('layout.header')

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Fundación protectora de animales</h1>
    <lottie-player class="d-block mx-auto mb-4 img-fluid" src="{{ asset('pet-dog.json') }}" background="transparent"
        speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>
    <div class="col-lg-6 mx-auto">
        <h4 class="text-muted mb-4">Somos una fundación sin fines de lucro, que lucha por la defensa de los derechos de
            los animales, si queres participar, consultar o ayudar, dejanos un mensaje.</h4>
    </div>

    @include('mensajes.create')

</div>

<!-- Footer -->
@include('layout.footer')