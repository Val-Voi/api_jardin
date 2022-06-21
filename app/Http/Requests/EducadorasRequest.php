<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducadorasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required',
            'rut' => 'required',
            'telefono_contacto' => 'required|digits:9',
            'correo_contacto' => 'required|email::rfc,dns',
            'niveles_id' => 'nullable|exists:niveles,id',

        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Nombre no puede ser nulo',
            'rut.required' =>  "Debe ingresar un rut",
            'telefono_contacto.required' => 'Debe ingresar número telefónico',
            'telefono_contacto.digits' => 'Debe ingresar un número telefónico válido',

            'correo_contacto.required' => 'Debe ingresar correo electrónico',
            'correo_contacto.email' => 'Debe ingresar un correo electrónico válido',
            'niveles_id.exists' => 'Nivel especificado no existe',
        ];
    }
}
