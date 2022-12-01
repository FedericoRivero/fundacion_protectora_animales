<!-- Header -->
@include('layout.header')

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Bienvenido a tu dashboard</h1>

    <lottie-player class="d-block mx-auto img-fluid" src="{{ asset('pet-dog.json') }}" background="transparent"
        speed="1" style="width: 400px; height: 400px;" loop autoplay></lottie-player>
    <div class="col-lg-6 mx-auto">
        <h4 class="text-muted">Hola soy simona!</h4>
        <h4 class="text-muted">Acá podes administrar los mensajes y articulos</h4>
    </div>

</div>

<!-- Footer -->
@include('layout.footer')