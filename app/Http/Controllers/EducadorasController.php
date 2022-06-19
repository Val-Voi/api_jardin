<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducadorasController extends Controller
{
    public function index()
    {
        return Educadora::all();
    }



    public function store(Request $request)
    {
        $educadora = new Educadora();
        $educadora->nombre = $request->nombre;
        $educadora->rut = $request->rut;
        $educadora->telefono_contacto = $request->telefono_contacto;
        $educadora->correo_contacto = $request->correo_contacto;

        $educadora->niveles_id = $request->niveles_id;

        $educadora->save();
        return $educadora; 
    }

    public function show(Educadora $educadora)
    {
        return $educadora;
    }


    public function update(EducadoraEditarRequest $request, Educadora $educadora)
    {

    }

    public function destroy(Educadora $educadora)
    {
        $educadora->delete();
    }
}
