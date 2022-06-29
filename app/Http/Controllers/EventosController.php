<?php

namespace App\Http\Controllers;
use App\Models\Evento;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index()
    {
        //return Evento::all();
        return Evento::orderBy('fecha')->get();

    }



    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->descripcion = $request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->nino_id = $request->nino_id;

        $evento->save();
        return $evento; 

    }

    public function show(Evento $evento)
    {
        return $evento;
    }


    public function update(EventoEditarRequest $request, Evento $evento)
    {
        $evento->descripcion = $request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->save();
        return $evento;
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
    }
}
