<h1>{{$titulo}}</h1>

<!--comentario html-->
<p>{{$listado[1]}}</p>
<p>{{date('y')}}</p>
{{-- esto es un comentario --}}


<?= isset($director)? $director : 'no hay'?>
<br>
{{$director ?? 'no hay director'}}


@if($titulo && count($listado)>=5)
<p>el titulo existe y es este : {{$titulo}}
    y listado tiene {{count($listado)}} en el listado
</p>
@elseif($titulo)
<p>el titulo existe y es este {{$titulo}} y el listado es menor a 5 </p>
@else
<p>no existe ni el titulo y el listado es menora 5 </p>
@endif



@for($i = 0; $i <= 10; $i++)
el numero es {{$i}}
@endfor

<?php $contador = 1 ?>
@while($contador < 50)

    @if($contador%2 == 0)
        numero : {{$contador}}

    @endif
    <?php $contador++ ?>
@endwhile

<hr>


@foreach ($listado as  $list )
<p>{{$list}}</p>
@endforeach
