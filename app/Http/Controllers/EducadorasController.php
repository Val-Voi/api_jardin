<?php

namespace App\Http\Controllers;
use App\Models\Educadora;
use App\Models\Educadora_Nivel;
use App\Models\Nivel;


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

    // public function educadoranivel(Educadora $educadora){
    //     return $educadora->niveles->sortBy('id');
    // }

    public function educadoranivel(Educadora $educadora){
        $pivot = Educadora_Nivel::where('educadora_id', $educadora->id)->orderBy('created_at', 'desc')->first()->nivel_id;
        return Nivel::where('id', $pivot)->first()->nombre;
        //return Nivel::where('id', Educadora_Nivel::where('educadora_id', $educadora->id)->orderBy('created_at', 'desc')->first()->nivel_id);

    }
    public function update(EducadoraEditarRequest $request, Educadora $educadora)
    {

    }

    public function destroy(Educadora $educadora)
    {
        $educadora->delete();
    }
}
