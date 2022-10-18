<section>
    <form action="{{route('articulos.store')}}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="nombre item">
        <input type="number" name="stock" placeholder="cantidad">
        <input type="submit" value="Guardar">
    </form>
</section>