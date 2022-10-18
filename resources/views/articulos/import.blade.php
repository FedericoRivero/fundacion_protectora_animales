<section>
    <form action="{{route('importarArticulos')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <input type="file" name="articulos" id="articulos">
        <input type="submit" value="Importar">
    </form>
</section>