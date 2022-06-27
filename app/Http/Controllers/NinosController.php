<?php

namespace App\Http\Controllers;

use App\Models\Nino;
use Illuminate\Http\Request;
use App\Http\Requests\NinoEditarNivelRequest;


class NinosController extends Controller
{

    public function index()
    {
        return Nino::orderBy('apellido')->get();
    }



    public function store(Request $request)
    {
        $nino = new Nino();
        $nino->nombre = $request->nombre;
        $nino->apellido = $request->apellido;
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
        $nino->id = $request->id;
        $nino->nombre = $request->nombre;
        $nino->apellido = $request->apellido;
        $nino->fecha_nacimiento = $request->fecha_nacimiento;
        $nino->rut = $request->rut;
        $nino->contacto_apoderado = $request->contacto_apoderado;
        $nino->niveles_id = $request->niveles_id;
        $nino->save();
        return $nino;
    }
    public function updateNivel(NinoEditarNivelRequest $request, Nino $nino){
        $nino->niveles_id = $request->niveles_id;
        $nino->save();
        return $nino;
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
