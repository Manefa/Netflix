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
            'resume' => 'required|string|min:2|max:300',
            'duree' => 'required|string|size:5',
            'annee_de_production' => 'required|integer|digits:4',
            'brand' => 'required|string|min:2|max:50',
            'realisateur_id' => 'required',
            'producteur_id' => 'required',
            'lienfilm' => 'required|active_url|min:2|max:200',
            'couverture_url' => 'required|active_url|min:2|max:200',
            'pochette_url' => 'required|active_url|min:2|max:200',
            'cote' => 'required|integer|between:0,100',
            'notation' => 'required|string|min:2|max:50',
            'genre_id[]' => 'required',
            'personne_id[]' => 'required',
            'langue_id[]' => 'required',
            'sous_titre_id[]' => 'required'


        ];
    }

    public function messages() {
        return [
            'titre.required' => 'Le titre est requis.',
            'titre.string' => 'Le titre doit être une chaîne de caractères.',
            'titre.min' => 'Le titre doit avoir au minimum 2 caractères.',
            'titre.max' => 'Le titre ne peut pas dépasser 50 caractères.',
        
            'resume.required' => 'Le résumé est requis.',
            'resume.string' => 'Le résumé doit être une chaîne de caractères.',
            'resume.min' => 'Le résumé doit avoir au minimum 2 caractères.',
            'resume.max' => 'Le résumé ne peut pas dépasser 300 caractères.',
        
            'duree.required' => 'La durée est requise.',
            'duree.string' => 'La durée doit être une chaîne de caractères.',
            'duree.size' => 'La durée doit être sous ce format : 2h30m',
        
            'annee_de_production.required' => "L'année de production est requise.",
            'annee_de_production.integer' => "L'année de production doit être un nombre entier.",
            'annee_de_production.digits' => "L'année de production doit avoir exactement 4 chiffres.",
        
            'brand.required' => 'La marque est requise.',
            'brand.string' => 'La marque doit être une chaîne de caractères.',
            'brand.min' => 'La marque doit avoir au moins 2 caractères.',
            'brand.max' => 'La marque ne peut pas dépasser 50 caractères.',
        
            'realisateur_id.required' => 'Le réalisateur est requis.',
            'producteur_id.required' => 'Le producteur est requis.',
        
            'lienfilm.required' => 'Le lien du film est requis.',
            'lienfilm.active_url' => 'Le lien du film doit être une URL valide.',
            'lienfilm.min' => 'Le lien du film doit avoir au moins 2 caractères.',
            'lienfilm.max' => 'Le lien du film ne peut pas dépasser 200 caractères.',
        
            'couverture_url.required' => "L'URL de la couverture est requise.",
            'couverture_url.active_url' => "L'URL de la couverture doit être une URL valide.",
            'couverture_url.min' => "L'URL de la couverture doit avoir au moins 2 caractères.",
            'couverture_url.max' => "L'URL de la couverture ne peut pas dépasser 200 caractères.",
        
            'pochette_url.required' => "L'URL de la pochette est requise.",
            'pochette_url.active_url' => "L'URL de la pochette doit être une URL valide.",
            'pochette_url.min' => "L'URL de la pochette doit avoir au moins 2 caractères.",
            'pochette_url.max' => "L'URL de la pochette ne peut pas dépasser 200 caractères.",
        
            'cote.required' => 'La cote est requise.',
            'cote.integer' => 'La cote doit être un nombre entier.',
            'cote.between' => 'La cote doit être comprise entre 0 et 100.',
        
            'notation.required' => 'La notation est requise.',
            'notation.string' => 'La notation doit être une chaîne de caractères.',
            'notation.min' => 'La notation doit avoir au moins 2 caractères.',
            'notation.max' => 'La notation ne peut pas dépasser 50 caractères.',
        
            'genre_id[].required' => 'Au moins un genre doit être sélectionné.',
            'personne_id[].required' => 'Au moins une personne doit être associée au film.',
            'langue_id[].required' => 'Au moins une langue doit être associée au film.',
            'sous_titre_id[].required' => 'Au moins un sous-titre doit être associé au film.',
            
        ];
    }
}
