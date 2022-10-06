<h1>HOME</h1>
<nav>
    <a href="{{route('mensajes.index')}}">Mensajes</a>
    <a href="/">Welcome</a>
    <form action="{{route('logout')}}" method="POST">
    @csrf
    <input type="submit" value="Salir">
    </form>
</nav>