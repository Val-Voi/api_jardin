<?php

namespace App\Http\Controllers;

use App\Models\Nivel;

use Illuminate\Http\Request;
use App\Http\Requests\NivelesRequest;


class NivelesController extends Controller
{
    public function index()
    {
        return Nivel::orderBy('nombre')->get();
    }



    public function store(NivelesRequest $request)
    {
        $validator = $request->validated();
        $nivel = new Nivel();
        $nivel->nombre = $request->nombre;
        $nivel->save();
        return $nivel; 
    }

    
    public function show(Nivel $nivel)
    {
        return $nivel;
    }

    public function destroy(Nivel $nivele)
    {
        
        $nivele->delete();
    }

    public function nivelninos(Nivel $nivel){
        return $nivel->ninos;
    }

    public function niveleducadoras(Nivel $nivel){
        return $nivel->educadoras;
    }

    public function update(NivelesRequest $request, Nivel $nivel)
    {
        $nivel->nombre = $request->nombre;
        $nivel->save();
        return $nivel;
    }
}
