<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|min: 3',
            'email' => 'required|email'
        ];
    }
    public function message()
    {
        return [
            'nom.required' => 'Le champ nom est requis',
            'nom.min' => 'Le champ nom doit contenir au moins 3 caractères',
            'email.required' => 'Le champ email est requis',
            'email.email' => 'L\'adresse email n\'est pas valide',
        ];
    }
}
