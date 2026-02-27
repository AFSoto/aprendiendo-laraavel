<h1>formulario en laravle</h1>




<form action="{{route('peliculas.redirigir')}}" method="POST">
    @csrf
    <label for="nombre">nombre</label>
    <input type="text" name="nombre">

    <br>

    <label for="email">correo</label>
    <input type="email" name="email">

    <br>

    <input type="submit" value="enviar">


</form>
