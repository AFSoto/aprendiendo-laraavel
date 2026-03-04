<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index()
    {
        $frutas = DB::table('frutas')
        ->orderBy('id','desc')
        ->get();

        return view('fruta.index', [
            'frutas' => $frutas
        ]);
    }

    public function detail($id)
    {
        $fruta = DB::table('frutas')->where('id', '=', $id)->first();

        // var_dump($fruta); die();
        return view('fruta.detail', [
            'fruta' => $fruta
        ]);
    }

    public function create(){
        return view('fruta.create');
    }

    public function save(Request $request){
        //guardar el registro
        $fruta = DB::table('frutas')->insert([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('y-m-d')
        ]);

        return redirect()->route('frutas.index')->with('status','fruta creada crrectamente');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id',$id)->delete();
        return redirect()->route('frutas.index')->with('status','fruta borrada correctamente');
    }

    public function edit($id){
        $fruta = DB::table('frutas')->where('id',$id)->first();

        return view('fruta.create',[
            'fruta' => $fruta
        ]);
    }

    public function update(Request $request){
        $id =  $request->input('id');
        $fruta = DB::table('frutas')->where('id',$id)
        ->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio')
        ]);

        return redirect()->route('frutas.index')->with('status','fruta actualizada correctamente');

    }


}
