
@isset($fruta)

<h1>actualizar fruta</h1>
@else
<h1>crear una fruta</h1>
@endisset


<form action="{{ isset($fruta)? route('frutas.update',[$fruta->id])
                : route('frutas.save') }}" method="POST">


@isset($fruta)
<input type="hidden" name="id" value="{{$fruta->id}}">
@endisset

    @csrf
    <label for="nombre">nombre</label>
    <input type="text" name="nombre" id="" value="{{$fruta->nombre ?? ''}}">

    <label for="precio">Precio</label>
    <input type="number" name="precio" id="" value="{{$fruta->precio ?? ''}}" >

    <label for="descripcion">descripcion</label>
    <input type="text" name="descripcion" id="" value="{{$fruta->descripcion ?? ''}}">

    <input type="submit" value="guardar">
</form>
