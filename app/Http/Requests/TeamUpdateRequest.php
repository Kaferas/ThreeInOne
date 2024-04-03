<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamUpdateRequest extends FormRequest
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
            'name' => "required|string|max:20",
            'prenom' => "required|string|max:20",
            'current_post' => "required|string|max:50",
            'eamil_adress' => "email",
            'phone_number' => 'required|numeric|digits:8',
            'picture_path' => 'file|mimes:jpg,png|max:800'
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => "Le Nom est Requis",
            'name.max' => "Le nom ne doit pas depasser 20 Caracteres",
            'prenom.required' => "Le Prenom est required",
            'prenom.max' => "Le prenom peux pas depasser 20 caracteres",
            'current_post.required' => "Le poste est requis",
            'current_post.max' => "Le poste peux pas depasser 50caracteres",
            'phone_number.required' => 'Numero de Telephone requis',
            'phone_number.digits' => 'Numero de telephone doit faire au minimum 8 chiffres',
            'picture_path.required' => 'Photo requis',
            'picture_path.max' => 'La taille Maximum du Photo est de 800',
            'picture_path.mimes' => 'Photo doit avoir l\'extension Jpg ou png requis'
        ];
    }
}
