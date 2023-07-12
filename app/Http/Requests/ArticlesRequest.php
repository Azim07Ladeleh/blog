<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
            'title' => 'required|min: 3',
            'description' => 'required|min: 5',
        ];
    }
    public function message()
    {
        return [
            'title.required' => 'Le champ titre est requis',
            'title.min' => 'Le champ titre doit contenir au moins 3 caractères', 
            'description.required' => 'Le champ description est requis',
            'description.min' => 'Le champ description doit contenir au moins 5 caractères',   
        ];
    }
}
