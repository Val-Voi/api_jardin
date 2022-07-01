<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\Nino;


use Illuminate\Http\Request;
use App\Http\Requests\EventosRequest;

class EventosController extends Controller
{
    public function index()
    {
        //return Evento::all();
        return Evento::orderByDesc('fecha')->get();

    }



    public function store(EventosRequest $request)
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


    public function update(Request $request, Evento $evento)
    {
        $evento->descripcion = $request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->save();
        return $evento;
    }

    public function eventonino(Evento $evento){
        return Nino::where('id', $evento->nino_id)->first()->nombre.' '.Nino::where('id', $evento->nino_id)->first()->apellido;
    }

    public function destroy(Evento $evento)
    {
        $evento->delete();
    }
}
