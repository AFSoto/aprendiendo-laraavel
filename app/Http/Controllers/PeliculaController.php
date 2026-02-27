<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1)
    {
        $titulo = "listado de mis peliculas";

        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public  function detalle(){
        echo "detalle de la pelicula";
        die();
    }
}
