<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'game_title' => 'required|string|min:3|max:250',
            'game_desc' => 'required|string|min:3|max:6000',
            'img_cover' => 'required|image|max:1024|mimes:jpg,jpeg,png',
        ];
    }
}
