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
            'nom' => 'required|min:3',
            'date_naissance' => 'required|date', 
            'photo' => 'required',
            'role_principal' => 'max:255',
            'biographie' => 'max:2000',
        ];
    }
}
