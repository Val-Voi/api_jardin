<?php

namespace App\Http\Controllers;

use App\Http\Controllers\File;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function index(Request $request){
        if($request!= null):
            $image  =   $request->imagen;  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = time().'.png';
            \File::put(public_path('/img/' . $imageName), base64_decode($image));

        endif;

        return response()->json($data, 200);


    }

    public function get(Request $imagen){
        //$type = pathinfo($path, PATHINFO_EXTENSION);
        // $image  =   $request->imagen;  // your base64 encoded
        // $image = str_replace('data:image/png;base64,', '', $image);
        // $image = str_replace(' ', '+', $image);
        // $imageName = time().'.png';
        $data = file_get_contents(public_path('/img/1656387706.png'));
        $base64 = 'data:image/' . public_path('/img/1656387706.png') . ';base64,' . base64_encode($data);
        return $base64;


        //return response()->json($data, 200);


    }


}