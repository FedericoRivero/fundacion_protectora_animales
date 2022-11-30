<!-- Header -->
@include('layout.header')

<div class="container-fluid">
    <h1>Articulos</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <td>{{$articulo->id}}</td>
                    <td>{{$articulo->nombre}}</td>
                    <td>{{$articulo->stock}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


    <div class="container-fluid text-center mt-3">
        <div class="card">
            <div class="card-body">
                @include('articulos.create')

                @include('articulos.import')
                <h3 class="mt-5">Descargar los articulos</h3>
                <a href="articulos/exportar" class="btn btn-primary">Exportar</a>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
@include('layout.footer')