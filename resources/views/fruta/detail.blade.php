<h1> {{$fruta->nombre}} </h1>

<p>
    {{
        $fruta->descripcion
    }}
</p>
<a href="{{route('frutas.delete',['id'=> $fruta->id])}}">eliminar</a>
<a href="{{route('frutas.edit',['id' => $fruta->id])}}">actualizar</a>
