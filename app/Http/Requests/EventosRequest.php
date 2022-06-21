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
            'niños_id' => 'nullable|exists:niños,id',

        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'Descripción del evento no puede ser vacía',
            'niños_id.exists' => 'El niño especificado no existe',
        ];
    }
}
