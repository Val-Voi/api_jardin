<?php

namespace App\Http\Controllers;
use App\Models\Educadora_Nivel;

use Illuminate\Http\Request;
use App\Http\Requests\EducadoraNivelRequest;

class Educadora_NivelController extends Controller
{
    public function index()
    {
        return Educadora_Nivel::all();
    }



    public function store(EducadoraNivelRequest $request)
    {
        $educadora_nivel = new Educadora_Nivel();
        $educadora_nivel->niveles_id = $request->niveles_id;
        $educadora_nivel->educadoras_id = $request->educadoras_id;

        $educadora_nivel->save();
        return $educadora_nivel; 
    }

    public function show(Nivel $educadora_nivel)
    {
        return $educadora_nivel;
    }

}
