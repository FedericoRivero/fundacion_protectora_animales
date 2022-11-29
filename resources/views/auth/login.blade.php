<!-- Header -->
@include('layout.header')


<main class="form-signin w-100 m-auto">

    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <form action="{{route('login')}}" method="post">
        @csrf

        <div class="form-floating">
            <input class="form-control" type="number" name="pin" placeholder="PIN" id="pin" required>
            <label for="pin">PIN</label>
        </div>

        <div class="form-floating mt-2">
            <input class="form-control" type="password" name="password" placeholder="Contraseña" id="password" required>
            <label for="password">Contraseña</label>
        </div>

        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Ingresar">
    </form>

</main>

<!-- Footer -->
@include('layout.footer')