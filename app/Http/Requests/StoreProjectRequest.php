<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => ['required', 'min:2', 'max:70'],
            "img_path" => ['required', 'min:10'],
            "programming_language" => ['required', 'min:2', 'max:100'],
            "overview" => ['nullable', 'min:2']
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'il titolo del progetto è troppo corto, minimo 2 caratteri',
            'title.max' => 'il titolo del progetto è troppo lungo, massimo 70 caratteri',
            'overview.min' => 'la descrizione è troppo corta',
        ];
    }
}
