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
            'fecha_nacimiento' => 'required|before:today',
            'rut' => 'required',
            'contacto_apoderado' => 'required',
            'niveles_id' => 'nullable|exists:niveles,id',

        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Nombre no puede ser nulo',
            'fecha_nacimiento.required' => 'Debe introducir fecha de nacimiento',
            'fecha_nacimiento.before' => 'No se debe ingresar una fecha futura',
            'rut.required' =>  "Debe ingresar un rut",
            'contacto_apoderado.required' => 'Debe ingresar un método de contacto del apoderado',
            'niveles_id.exists' => 'Nivel especificado no existe',
        ];
    }
}
