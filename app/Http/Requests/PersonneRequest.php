<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneRequest extends FormRequest
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
            'nom' => 'required|min:3|string',
            'date_naissance' => 'required|date',
            'photo' => 'required|string|max:255',
            'role_principal' => 'required|string|max:255',
            'biographie' => 'required|string|max:2000',
        ];
    }

    public function messages() {
        return [
            'nom.required' => 'Le champ du nom est requis.',
            'nom.min' => 'Le nom doit avoir au moins :min caractères.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
    
            'date_naissance.required' => 'Le champ de la date de naissance est requis.',
            'date_naissance.date' => 'La date de naissance doit être une date valide.',
    
            'photo.required' => 'Le champ de la photo est requis.',
            'photo.string' => 'Le chemin de la photo doit être une chaîne de caractères.',
            'photo.max' => 'Le chemin de la photo ne doit pas dépasser :max caractères.',
    
            'role_principal.required' => 'Le champ du rôle principal est requis.',
            'role_principal.string' => 'Le rôle principal doit être une chaîne de caractères.',
            'role_principal.max' => 'Le rôle principal ne doit pas dépasser :max caractères.',
    
            'biographie.required' => 'Le champ de la biographie est requis.',
            'biographie.string' => 'La biographie doit être une chaîne de caractères.',
            'biographie.max' => 'La biographie ne doit pas dépasser :max caractères.',
            
        ];
    }
}
