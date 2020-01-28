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

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaNueva = new App\Nota;
        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;

        $notaNueva->save();

        return back()->with('mensaje', 'Nota agregada!');
    }

    public function editar($id){

        $nota = App\Nota::findOrFail($id);

        return view('notas.editar', compact('nota'));

    }

    public function update(Request $request, $id){

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $notaUpdate = App\Nota::findOrFail($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;

        $notaUpdate->save();

        return back()->with('mensaje', 'Se actualizo con exito!');
    }

    public function editaCarros($id){

        $nota = App\Carro::findOrFail($id);

        return view('notas.editaCarros', compact('nota'));
    }

    public function updateCarros(Request $form1, $id){

        $form1->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'placa' => 'required'
        ]);

        $notaUpdate = App\Carro::findOrFail($id);
        $notaUpdate->marca = $form1->marca;
        $notaUpdate->modelo = $form1->modelo;
        $notaUpdate->placa = $form1->placa;

        $notaUpdate->save();

        return back()->with('mensaje', 'se actualizo con exito!');
    }
}
