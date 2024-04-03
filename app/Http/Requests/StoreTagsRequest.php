<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTagsRequest extends FormRequest
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
            'name' => "required|string|max:20|min:4",
            'color_categorie' => "required"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Le Nom de la tags est requis",
            'name.string' => "Le nom doit etre une Chaine de Caractere",
            'name.max' => "Le nom doit faire 20 Caractere au Max",
            'name.min' => "Le nom doit faire 4 Caractere au Min",
            'color_categorie.required' => "La couleur du Tag est Requis"
        ];
    }
}
