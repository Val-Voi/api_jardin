<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NinosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required|before:today',
            'rut' => 'required',
            'contacto_apoderado' => 'required',
            'nivel_id' => 'nullable|exists:niveles,id',
            'imagen' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Ingrese nombre del niño',
            'apellido.required' => 'Ingrese apellido del niño',

            'fecha_nacimiento.required' => 'Debe introducir fecha de nacimiento',
            'fecha_nacimiento.before' => 'No se puede ingresar una fecha en el futuro',

            'rut.required' =>  "Debe ingresar un rut",

            'contacto_apoderado.required' => 'Debe ingresar un método de contacto del apoderado',

            'nivel_id.exists' => 'Nivel especificado no existe',
            
            'imagen.required' => 'Cargue una foto del niño'
        ];
    }
}
