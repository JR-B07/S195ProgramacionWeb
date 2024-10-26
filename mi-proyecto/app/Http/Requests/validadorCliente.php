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
            'nombre' => 'required|max:20',
            'apellido' => 'required|max:50',
            'correo' => 'required|email:rfc,dns',
            'telefono' => 'required|numeric|digits_between:8,15'
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
            'nombre.required' => 'El nombre es obligatorio',
            'nombre.max' => 'El nombre no debe exceder 20 caracteres',
            'apellido.required' => 'El apellido es obligatorio',
            'apellido.max' => 'El apellido no debe exceder 50 caracteres',
            'correo.required' => 'El correo es obligatorio',
            'correo.email' => 'El correo debe ser una dirección válida',
            'telefono.required' => 'El teléfono es obligatorio',
            'telefono.numeric' => 'El teléfono debe contener solo números',
            'telefono.digits_between' => 'El teléfono debe tener entre 8 y 15 dígitos'
        ];
    }
}
