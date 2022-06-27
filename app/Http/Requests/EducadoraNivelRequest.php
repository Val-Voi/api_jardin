<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducadoraNivelRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'niveles_id' => 'nullable|exists:niveles,id',
            'educadoras_id' => 'nullable|exists:educadoras,id',

        ];

        
    }
    public function messages()
        {
            return [
                'niveles_id.exists' => 'Nivel ingresado no existe',
                'educadoras_id.exists' => 'Educadora ingresada no existe',

            ];
        }
}
