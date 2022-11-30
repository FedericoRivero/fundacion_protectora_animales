<!-- Header -->
@include('layout.header')

<div class="table-responsive">
    <table class="table table-striped">

        <thead>
            <tr>
                <th>#</th>
                <th>Contacto</th>
                <th>Mensaje</th>
                <th>Ver</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes as $mensaje)
            <tr>
                <td>{{$mensaje->id}}</td>
                <td>{{$mensaje->nombre}}</td>
                <td>{{$mensaje->texto}}</td>
                <td><a href="{{route('mensajes.show',$mensaje->id)}}" class="btn btn-primary">Ver</a></td>
                <td>
                    <form action="{{route('mensajes.destroy',$mensaje->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>
</div>

<!-- Footer -->
@include('layout.footer')