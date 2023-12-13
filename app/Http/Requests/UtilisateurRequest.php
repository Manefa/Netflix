<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom_usager' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:usagers,email|max:255',
            'role' => 'required|in:admin,normal,enfant',
            'password' => 'required|string|min:8',
        ];
    }

    public function messages() {
        return [
            'nom_usager.required' => 'Le champ du nom d\'usager est requis.',
            'nom_usager.string' => 'Le nom d\'usager doit être une chaîne de caractères.',
            'nom_usager.max' => 'Le nom d\'usager ne doit pas dépasser :max caractères.',
    
            'nom.required' => 'Le champ du nom est requis.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne doit pas dépasser :max caractères.',
    
            'prenom.required' => 'Le champ du prénom est requis.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne doit pas dépasser :max caractères.',
    
            'email.required' => 'Le champ de l\'adresse email est requis.',
            'email.email' => 'Veuillez saisir une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
    
            'role.required' => 'Le champ du rôle est requis.',
            'role.in' => 'Le rôle sélectionné n\'est pas valide.',
    
            'password.required' => 'Le champ du mot de passe est requis.',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
            'password.min' => 'Le mot de passe doit avoir au moins :min caractères.',
            
        ];
    }
}
