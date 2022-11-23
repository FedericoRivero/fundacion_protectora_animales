<!-- Header -->
@include('layout.header')

<header class="mt-4">
    <h1>Fundación protectora de animales</h1>
</header>

<section>
    <img src="{{asset('portada.jpg')}}" alt="">
</section>

<section>
    @include('mensajes.create')
</section>

<!-- Footer -->
@include('layout.footer')