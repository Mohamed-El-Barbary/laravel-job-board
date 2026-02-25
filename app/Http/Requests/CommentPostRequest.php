<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'author' => 'required|string|max:255',
            'content' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'author.required' => 'Author is required.',
            'author.string' => 'Author must be a string.',
            'author.max' => 'Author cannot exceed 255 characters.',
            'content.required' => 'Content is required.',
            'content.string' => 'Content must be a string.'
        ];
    }
}
