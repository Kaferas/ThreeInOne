<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventsRequest extends FormRequest
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
            'poster_url' => "file|mimes:jpg,png|max:1024|required",
            'title' => "required|string|max:50",
            'date_event' => "required",
            'from_hour' => "required",
            'to_hour' => "required",
            'location_event' => "required",
            'description_event' => "required|min:30",
        ];
    }
    public function messages()
    {
        return [
            'poster_url.mimes' => "Le poster doit etre de Type Jpg ou Png",
            'poster_url.max' => "La taille max du Poster est de 1M",
            'poster_url.required' => "Le poster est requis",
            'title.required' => "Le titre est requis",
            'title.max' => "La taille Max du title est de 50 Caracteres",
            'date_event.required' => "La date de l\'evenement est requis",
            'from_hour.required' => "la date de depart requis",
            'to_hour.required' => "La date de Fin requis",
            'location_event.required' => "La localisation Important",
            'description_event.required' => "La description est requis",
            'description_event.min' => "La taille minimun est de 30 caracteres",
        ];
    }
}
