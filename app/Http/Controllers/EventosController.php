<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index()
    {
        return Evento::all();
    }



    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->descripcion = $request->descripcion;
        $evento->niños_id = $request->niños_id;

        $evento->save();
        return $evento; 

    }

    public function show(Evento $evento)
    {
        return $evento;
    }


    public function update(EventoEditarRequest $request, Evento $evento)
    {

    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
    }
}
