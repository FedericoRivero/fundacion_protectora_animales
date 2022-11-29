<!-- Header -->
@include('layout.header')

<main class="form-signin w-100 m-auto">

    <h1 class="h3 mb-3 fw-normal">Registro</h1>
    <form action="{{route('register')}}" method="post">
        @csrf

        <div class="form-floating">
            <input class="form-control" id="pin" type="number" name="pin" placeholder="PIN" required>
            <label for="pin">PIN</label>
        </div>

        <div class="form-floating mt-2">
            <input class="form-control" id="password" type="password" name="password" placeholder="Contraseña" required>
            <label for="password">Contraseña</label>
        </div>

        <div class="form-floating">
            <input class="form-control" type="password" name="password_confirmation" placeholder="Contraseña" required>
            <label for="password">Vuelve a ingresar tu contraseña</label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Registrar">
    </form>
</main>

<!-- Footer -->
@include('layout.footer')