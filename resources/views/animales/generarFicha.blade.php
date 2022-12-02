<!-- Header -->
@include('layout.header')

<div class="container-fluid form-signin w-100 text-center mt-5">
    <h3 class="mt-3">Crear ficha del animal</h3>
    <form method="POST" action="generarFicha">
        @csrf

        <div class="form-floating mt-2">
            <input type="text" name="nombre" placeholder="Nombre" class="form-control">
            <label for="nombre">Nombre</label>
        </div>

        <div class="form-floating mt-2">
            <input type="text" name="nacimiento" placeholder="Año Nacimiento" class="form-control">
            <label for="nacimiento">Año de nacimiento</label>
        </div>

        <div class="form-floating mt-2">
            <select name="especie" id="" class="form-control">
                <option value="perro">perro</option>
                <option value="gato">gato</option>
                <option value="ave">ave</option>
                <option value="roeder">roedor</option>
            </select>
            <label for="especie">Especie</label>
        </div>

        <div class="form-floating mt-2">
            <input type="text" name="raza" placeholder="raza" class="form-control">
            <label for="raza">Raza</label>
        </div>

        <input type="submit" value="Generar" class="w-100 btn btn-lg btn-success mt-5">

    </form>

</div>

<!-- Footer -->
@include('layout.footer')