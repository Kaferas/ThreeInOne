<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required',
            'phone_number' => 'required',
            'adresse' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Le Nom est requis',
            'name.min' => 'Le Nom min est de 5 caracteres',
            'email.required' => 'L\'adresse Mail requis',
            'phone_number.required' => 'Numero de Telephone requis',
            'adresse.required' => 'Adresse Requis',
            'password.required' => 'Mot de Passe requis',
            'password.confirmed' => 'Les deux mots de passe se rassemble pas',
            'password.min' => 'La Longueur Min du password est de 6 caracteres',
            'password_confirmation.required' => 'Mot de passe de Confirmation requis',
        ];
    }
}
