<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;  // Cambia a true para permitir la validación
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtnombre' => 'required|max:20',
            'txtapellido' => 'required|max:50',
            'txtcorreo' => 'required|email',
            'txttelefono' => 'required|numeric|min:8'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'txtnombre.required' => 'El nombre es obligatorio',
            'txtnombre.max' => 'El nombre no debe exceder 20 caracteres',
            'txtapellido.required' => 'El apellido es obligatorio',
            'txtapellido.max' => 'El apellido no debe exceder 50 caracteres',
            'txtcorreo.required' => 'El correo es obligatorio',
            'txtcorreo.email' => 'El correo debe ser una dirección válida',
            'txttelefono.required' => 'El teléfono es obligatorio',
            'txttelefono.numeric' => 'El teléfono debe contener solo números',
            'txttelefono.min' => 'El teléfono debe tener 8 numeros'
        ];
    }
}
