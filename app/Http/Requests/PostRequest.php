<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titolo' => 'required',
            'descrizione' => 'required',
            'testo' => 'required',
            'categoria' => 'required',
            'autore' => 'required',
        ];
    }


    public function messages()
    {
        return [ 
            'titolo' => 'Il titolo è un campo obbligatorio',
            'descrizione' => 'La descrizione è un campo obbligatorio',
            'testo' => 'Il testo è un campo obbligatorio',
            'categoria' => 'La categoria è un campo obbligatorio',
            'autore' => 'L\'autore è un campo obbligatorio',
        ];
    }
}
