<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticlesRequest extends FormRequest
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
            'title' => "required|string|min:8|max:40",
            'categorie_id' => 'required',
            'description' => "required|string|min:30",
            'pictures_path' => "required"
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Le Title est requis",
            'title.min' => "Le Title est doit faire 8 min de caracteres",
            'title.max' => "Le Title est doit faire 40 max de caracteres",
            'categorie_id' => 'La Categorie est requis',
            'description.required' => "La descripption est requis",
            'description.min' => "La description est 30 au minimun",
            'pictures_path.required' => "La Photo est requis"
        ];
    }
}
