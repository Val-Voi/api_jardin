<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NivelesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'Nombre no puede ser nulo',
            'nombre.min' => 'Nombre debe ser largo',
            //'nombre.string' => 'Nombre debe ser string'
        ];
    }
}
