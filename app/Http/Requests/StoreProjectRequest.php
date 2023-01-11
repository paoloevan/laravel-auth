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
            'title' => 'required|unique:projects,title|max:255',
            'team' => 'nullable|max:255',
            'duration' => 'nullable|max:255',
            'description' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è richesto',
            'title.unique' => 'Il titolo è già presente nel database',
            'title.max' => 'Il titolo è troppo lungo',
            'team.max' => 'Il nome del team è troppo lungo',
            'duration.max' => 'La durata è troppo lunga'
        ];
    }
}
