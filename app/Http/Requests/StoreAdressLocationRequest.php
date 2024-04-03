<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdressLocationRequest extends FormRequest
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
            'phone_number' => "required",
            'email_adress' => "required|email",
            'adress_location' => "required",
            'facebook_link' => "required",
            'twitter_link' => "string",
            'youtube_link' => "string"
        ];
    }
    public function messages()
    {
        return [
            'phone_number.required' => "Numero de Telephone Requis",
            'email_adress.required' => "Adresse Mail requis",
            'email_adress.email' => "Adresse Mail doit etre Valide",
            'adress_location.required' => "Adresse requis",
            'facebook_link.required' => "Adresse Page Facebook Requis",
            'twitter_link.string' => "L\'adresse Twitter doit etre une Chaine de Caractere",
            'youtube_link.string' => "L\'adresse Youtube doit etre une Chaine de Caractere",
        ];
    }
}
