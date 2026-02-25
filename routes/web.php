<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    echo "HOLA MUNDO";
});


Route::get('/mostrar-fecha', function () {
    $titulo = "estoy mostrando la fecha";
    return view('mostrar-fecha',array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo}/{year}',function($titulo = 'no hay pelicula seleccionada', $year = 2023){
    return view('pelicula',array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));
