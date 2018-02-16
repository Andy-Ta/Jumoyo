<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class EditPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: Check if has business
        return session()->has('id');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'editSelect' => 'required',
            'editTitle' => 'required|max:255',
            'editText' => 'required',
        ];
    }
}