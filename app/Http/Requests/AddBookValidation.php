<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddBookValidation extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            'book_name' => 'required|max:255',
            'author_name' => 'required',
            'edition' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'book_name.required' => 'Please Give Book Name',
            'author_name.required'  => 'Please Give Author Name',
        ];
    }
}
