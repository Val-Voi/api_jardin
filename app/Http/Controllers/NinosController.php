<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NinosController extends Controller
{

    public function index()
    {
        return Nino::all();
    }



    public function store(Request $request)
    {

    }

    public function show(Nino $nino)
    {
    }


    public function update(NinoEditarRequest $request, Nino $nino)
    {

    }

    public function destroy(Nino $nino)
    {

    }
}
