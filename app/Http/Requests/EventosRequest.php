<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventosRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'descripcion' => 'required',
            'fecha' => 'required',
            'nino_id' => 'nullable|exists:niños,id',

        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'Ingrese descripción del evento',
            'fecha.required' => 'Especifique fecha en que ocurrió el evento',
            'nino_id.exists' => 'El niño especificado no se encuentra en el sistema',
        ];
    }
}
