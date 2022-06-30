<?php

namespace App\Http\Controllers;

use App\Http\Controllers\File;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function index(Request $request){
        if($request!= null):
            $image  =   $request->imagen; 
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = $request->nombre;
            \File::put(public_path('/img/' . $imageName), base64_decode($image));

        endif;

        return response()->json($data, 200);


    }

    public function getImage(string $imagen){
        //$type = pathinfo($path, PATHINFO_EXTENSION);
        // $image  =   $imagen->imagen;  // your base64 encoded
        // $image = str_replace('data:image/png;base64,', '', $image);
        // $image = str_replace(' ', '+', $image);
        // $imageName = time().'.png';
        $data = file_get_contents(public_path('/img/'.$imagen));
       // $base64 = 'data:image/' . public_path('/img/1656387706.png') . ';base64,' . base64_encode($data);
        $base64 = base64_encode($data);

               //$base64 = substr($base64, 3);
               // $base64 = substr($base64, 0, -3);
        //$base64 = 'data:image/png;base64,'.$base64;
        //$base64 = str_replace('+', ' ', $image);

        return $base64;


        //return response()->json($data, 200);


    }


}