<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ContactRequest extends FormRequest
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
    public function rules() //TODO: backend validation
    {
        return [
            'name' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'phone' => 'required|phone:CA,US',
            'email' => 'required|email',
            'address' => ['required', "regex:/^(\s\d\p{L}+\'\.\,(?:. |-| |'))*[\s\d\p{L}\'\.\,]*$/i", 'max:255'],
            'image' => 'image'
        ];
    }
}

