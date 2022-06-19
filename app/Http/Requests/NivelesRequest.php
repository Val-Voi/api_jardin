<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NivelesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'min:8'
        ];
    }

    public function messages()
    {
        return [
            //'nombre.required' => 'Nombre no puede ser nulo',
            'nombre.min' => 'Nombre debe ser largo',
            //'nombre.string' => 'Nombre debe ser string'
        ];
    }
}
