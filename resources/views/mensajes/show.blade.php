<!-- Header -->
@include('layout.header')

<div class="container-fluid text-center">
    <h1>Mensaje</h1>
    <h1>Nombre: {{$mensaje->nombre}}</h1>
    <p>Mensaje: {{$mensaje->texto}}</p>
    <a class="btn btn-primary" href="{{route('mensajes.index')}}">Volver</a>
</div>

<!-- Footer -->
@include('layout.footer')