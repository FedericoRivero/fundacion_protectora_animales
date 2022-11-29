<div class="container col-xl-10 col-xxl-8 px-4 py-2">

    <div class="row align-items-center g-lg-5 py-5">

        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Mensajes</h1>
            <p class="col-lg-10 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae quasi
                dignissimos ipsa, culpa nostrum accusantium perspiciatis consequuntur! Corrupti vitae voluptatum
                laudantium rem omnis dolorem sint dolores facere quaerat, aperiam libero.</p>
        </div>

        <div class="col-md-10 mx-auto col-lg-5">

            <form class="p-4 p-md-5 border rounded-3 bg-light" action="{{route('mensajes.store')}}" method="POST">
                @csrf

                <div class="form-floating mb-3">
                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre..."
                        required>
                    <label for="nombre">Nombre</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea name="texto" class="form-control" id="texto" cols="30" rows="10" placeholder="Mensaje"
                        required></textarea>
                    <label for="texto">Mensaje</label>
                </div>

                <input class="w-100 btn btn-lg btn-primary" type="submit" value="Enviar">
                <hr class="my-4">

                <small class="text-muted">¡Gracias por escribirnos!</small>

            </form>
        </div>
    </div>
</div>