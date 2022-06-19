<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NivelesController extends Controller
{
    public function index()
    {
        return Nivel::all();
    }



    public function store(Request $request)
    {

    }

    public function show(Nivel $nivel)
    {
    }


    public function update(NinoEditarRequest $request, Nino $nino)
    {

    }

    public function destroy(Nino $nino)
    {

    }
}
