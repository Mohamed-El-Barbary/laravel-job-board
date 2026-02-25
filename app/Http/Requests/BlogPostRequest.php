<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
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
            'title' => "bail|required|unique:post,title,{$this->input("id")}|string|max:255",
            'author' => 'required|string|max:255',
            'body' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The field is required.',
            'title.max:255'=> 'The title may not be greater than 255 characters.',
            'author.required' => 'The field is required.',
            'author.max:255'=> 'The author may not be greater than 255 characters.',
            'body.required' => 'The field is required.',
        ];
    }
}
