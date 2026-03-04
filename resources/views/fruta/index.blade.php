
<h1>LISTADO DE FRUTAS </h1>
<a href="{{route('frutas.create')}}">
    <h3>crear fruta</h3>

</a>

@if (session('status'))
    <p>{{session('status')}}</p>
@endif

<ul>
    @foreach ($frutas as $fruta )

    <li>
        <a href="{{route('frutas.detail',['id' => $fruta->id])}}">
            {{$fruta->nombre}}
        </a>
        </li>

    @endforeach
</ul>
