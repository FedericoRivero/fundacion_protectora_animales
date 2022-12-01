<div class="container-fluid text-center mt-5">
    <h3>Importar artículos</h3>

    <form action="{{route('importarArticulos')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <input type="file" name="articulos" id="articulos" accept=".xlsx" class="btn btn-secondary">
        <input type="submit" value="Importar" class="btn btn-primary">
    </form>

</div>