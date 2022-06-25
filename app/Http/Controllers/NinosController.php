<?php

namespace App\Http\Controllers;

use App\Models\Nino;
use Illuminate\Http\Request;

class NinosController extends Controller
{

    public function index()
    {
        return Nino::all();
    }



    public function store(Request $request)
    {
        $nino = new Nino();
        $nino->nombre = $request->nombre;
        $nino->fecha_nacimiento = $request->fecha_nacimiento;
        $nino->rut = $request->rut;
        $nino->contacto_apoderado = $request->contacto_apoderado;
        $nino->niveles_id = $request->niveles_id;

        $nino->save();
        return $nino; 

    }

    public function show(Nino $nino)
    {
        return $nino;
    }


    public function update(NinoEditarRequest $request, Nino $nino)
    {

    }
    public function ninoeventos(Nino $nino)
    {
        return $nino->eventos;
    }
    public function destroy(Nino $nino)
    {
        $nino->delete();
    }
}
