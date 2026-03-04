<?php

use App\Http\Controllers\FrutaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\TestYear;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    echo "HOLA MUNDO";
});

// forma antigua
// Route::get('/peliculas', 'PeliculaController@index');


Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index'])
    ->name('peliculas.index');



Route::get('/formulario', [PeliculaController::class, 'formulario'])
    ->name('peliculas.formulario');

Route::post('/recibir',[PeliculaController::class, 'recibir']);

Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])
    ->name('peliculas.detalle')
    ->middleware('testyear');



Route::post('/redirigir', [PeliculaController::class, 'recibir'])
    ->name('peliculas.redirigir');

Route::resource('usuario', UsuarioController::class);



//rutas de fruta
Route::group(['prefix'=>'frutas'],function(){
    Route::get('index',[FrutaController::class,'index'])
    ->name('frutas.index');

    Route::get('detail/{id}',[FrutaController::class,'detail'])
    ->name('frutas.detail');

    Route::get('crear',[FrutaController::class,'create'])
    ->name('frutas.create');

    Route::post('save',[FrutaController::class,'save'])
    ->name('frutas.save');

    Route::get('delete/{id}',[FrutaController::class,'delete'])
    ->name('frutas.delete');

    Route::get('editar/{id}',[FrutaController::class,'edit'])
    ->name('frutas.edit');

    Route::post('update',[FrutaController::class,'update'])
    ->name('frutas.update');
});

// Route::get('/mostrar-fecha', function () {
//     $titulo = "estoy mostrando la fecha";
//     return view('mostrar-fecha', array(
//         'titulo' => $titulo
//     ));
// });

// Route::get('/pelicula/{titulo}/{year}', function ($titulo = 'no hay pelicula seleccionada', $year = 2023) {
//     return view('pelicula', array(
//         'titulo' => $titulo,
//         'year' => $year
//     ));
// })->where(array(
//     'titulo' => '[a-zA-Z]+',
//     'year' => '[0-9]+'
// ));


// Route::get('/lista-peliculas', function () {
//     $titulo = "pequeño travieso";
//     $listado = ['lol','travieso'];
//     return view('peliculas.listado')
//     ->with('titulo',$titulo)
//     ->with('listado',$listado);
// });


// Route::get('/pagina-generica', function () {
//     return view('pagina');
// });
