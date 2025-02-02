<?php

namespace App\Http\Requests\Farmaceutico;

use App\Models\Farmaceutico; #Antes no estaba. Quitar en caso de error
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DNI;

class StoreFarmaceuticoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', Farmaceutico::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'apellidos' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'genero' => 'string|max:255',
            'dni' => ['required', 'string', 'unique:farmaceuticos', new DNI],
            'password' => 'required|string|confirmed|min:8',
            'fecha_contratacion' => 'date',
            'sueldo' => 'numeric',
            'farmacia_id' => 'exists:farmacias,id',
        ];
    }
}
