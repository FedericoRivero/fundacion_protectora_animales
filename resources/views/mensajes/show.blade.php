<!-- Header -->
@include('layout.header')

<section class="mt-4">
    <h1>{{$mensaje->nombre}}</h1>
    <p>{{$mensaje->texto}}</p>
    <a class="btn btn-success" href="{{route('mensajes.index')}}">Volver</a>
</section>

<!-- Footer -->
@include('layout.footer')