<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideogameRequest extends FormRequest
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
            'title' => 'required|min:3',
            'releaseYearJP' => 'required|numeric',
            'releaseYearWW' => 'required|numeric',
            'console' => 'required|min:2',
            'coverImage' => 'required|url',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Devi aggiungere un titolo.',
            'title.min' => 'Il titolo deve avere un numero minimo di 3 parole.'
        ];
    }
}
