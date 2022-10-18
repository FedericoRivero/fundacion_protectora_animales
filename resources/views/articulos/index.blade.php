<section>

    <table>
        <thead>
            <tr>
                <tr>N</tr>
                <tr>Nombre</tr>
                <tr>Cantidad</tr>
                <tr></tr>
                <tr></tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{$articulo->id}}</td>
                    <td>{{$articulo->nombre}}</td>
                    <td>{{$articulo->stock}}</td>
                    <td>Editar</td>
                    <td>Eliminar</td>
                </tr>        
            @endforeach
        </tbody>
    </table>

</section>

<br><br>
@include('articulos.create')
<br><br>
@include('articulos.import')
<br><br>
<a href="articulos/exportar">Exportar</a>
