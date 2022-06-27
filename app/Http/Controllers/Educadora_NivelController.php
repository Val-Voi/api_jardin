<?php

namespace App\Http\Controllers;
use App\Models\Educadora_Nivel;

use Illuminate\Http\Request;
use App\Http\Requests\EducadoraNivelRequest;

class Educadora_NivelController extends Controller
{
    public function index()
    {
        //return Educadora_Nivel::all();
        return Educadora_Nivel::orderBy('created_at')->get();

    }



    public function store(EducadoraNivelRequest $request)
    {
        $educadora_nivel = new Educadora_Nivel();
        $educadora_nivel->nivel_id = $request->nivel_id;
        $educadora_nivel->educadora_id = $request->educadora_id;

        $educadora_nivel->save();
        return $educadora_nivel; 
    }

    public function show(Nivel $educadora_nivel)
    {
        return $educadora_nivel;
    }

}
