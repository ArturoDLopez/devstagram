<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StroreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|min:3",
            "description" => ["required", 'min:10', 'max:200'],
            "category" => "required"
        ];
    }

    public function messages(){
        return [
            "name.required" => "El nombre es obligatorio",
            "name.min" => "El campo nombre debe tener al menos 3 caracteres",
            "description.required" => "El campo descripcion es obligatorio",
            "description.min" => "El campo descripcion debe tener al menos 10 caracteres",
            "description.max" => "El campo descripcion no debe tener mas de 200 caracteres",
            "category.required" => "El campo categoria es obligatorio"
        ];
    }

    public function attributes(): array{
        return[
            "name"=> "nombre del curso",
        ];
    }
}
