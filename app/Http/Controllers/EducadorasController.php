<?php

namespace App\Http\Controllers;
use App\Models\Educadora;

use Illuminate\Http\Request;
use App\Http\Requests\EducadorasRequest;


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
