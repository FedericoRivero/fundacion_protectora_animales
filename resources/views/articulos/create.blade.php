<div class="container-fluid text-center mt-3">
    <h3>Crear articulos</h3>
    <form action="{{route('articulos.store')}}" method="POST">
        @csrf
        <div class="form-floating mt-2">
            <input type="text" name="nombre" placeholder="nombre item" class="form-control">
            <label for="nombre">Nombre</label>
        </div>

        <div class="form-floating mt-2">
            <input type="number" name="stock" placeholder="cantidad" class="form-control">
            <label for="stock">Stock</label>
        </div>

        <input type="submit" value="Guardar" class="w-100 btn btn-lg btn-success mt-2">
    </form>
</div>