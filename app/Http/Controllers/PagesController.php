<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //

    public function inicio(){

        $notas = App\Nota::all();

        return view('welcome', compact('notas'));
    }

    public function fotos(){
        return view('fotos');
    }

    public function nosotros($nombre= null){

        $equipo= ['Luddy', 'Martin', 'Imposible'];

        return view('nosotros', compact('equipo', 'nombre'));
    }

    public function blog(){
        return view('blog');
    }

    public function practica(){

        $carros = App\Carro::all();

        return view('practica', compact('carros'));
    }

    public function detalle($id){

        $nota= App\Nota::findOrFail($id);

        return view('notas.detalle', compact('nota'));
    }

    public function carros($id){

        $pru= App\Carro::findOrFail($id);

        return view('notas.carros', compact('pru'));
    }

    public function crear(Request $request){
        //return $request->all();

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota agregada!');
    }
}
