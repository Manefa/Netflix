<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required|string|min:2|max:50',
            'resume' => 'required|string|min:2|max:50',
            'duree' => 'required|string|size:5',
            'annee_de_production' => 'required|integer|digits:4',
            'brand' => 'required|string|min:2|max:50',
            'realisateur_id' => 'required',
            'producteur_id' => 'required',
            'lienfilm' => 'required|active_url|min:2|max:100',
            'couverture_url' => 'required|active_url|min:2|max:100',
            'pochette_url' => 'required|active_url|min:2|max:100',
            'cote' => 'required|integer|between:0,100',
            'notation' => 'required|string|min:2|max:50',
        ];
    }

    public function messages() {
        return [
            'titre.min' => 'Le titre doit au minimum avoir 2 caractères.',
            'resume.min' => 'Le resume doit au minimum avoir 2 caractères.',
            'duree.size' => 'La durée doit être sous ce format: 2h30m'
            
        ];
    }
}
