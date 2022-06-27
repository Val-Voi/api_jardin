<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NinoEditarNivelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'niveles_id' => 'nullable|exists:niveles,id',

        ];
    }

    public function messages()
    {
        return [
            'niveles_id.exists' => 'Nivel especificado no existe',
        ];
    }
}
