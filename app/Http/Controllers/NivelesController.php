<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;
use App\Http\Requests\NivelesRequest;


class NivelesController extends Controller
{
    public function index()
    {
        return Nivel::all();
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

}
