<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VinoRequest extends FormRequest
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
            "nombre" => "required|string",
            "descripcion" => "required|string",
            "anyo" => "required|integer",
            "alcohol" => "required|numeric",
            "tipo" => "required|string",
            "bodega_id" => "required|integer|exists:bodegas,id",
        ];
    }
}
