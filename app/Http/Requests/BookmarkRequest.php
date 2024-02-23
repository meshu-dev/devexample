<?php

namespace App\Http\Requests;

class BookmarkRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:255',
            'url' => 'required|url:http,https|min:6|max:255',
        ];
    }
}
