<form action="{{route('mensajes.store')}}" method="POST" class="form form-mensajes">
    @csrf

    <div>
        <div class="mt-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribe tu nombre...">
            <label class="mt-4" for="mensaje">Mensaje</label>
            <textarea name="texto" class="form-control" id="mensaje" cols="30" rows="10"
                placeholder="Escriba su consulta...">
            </textarea>
        </div>

        <input type="submit" class="btn btn-primary mt-2" value="Enviar">
    </div>
</form>