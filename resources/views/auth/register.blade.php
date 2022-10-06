<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" name="nik">
    <input type="password" name="password">
    <input type="password" name="password_confirmation">
    <input type="submit" value="Registrar">
</form>