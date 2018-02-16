<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ClientRequest extends FormRequest
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
            'firstName' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'lastName' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'email' => 'required|email|unique:clients,email',
            'password' => 'required|confirmed|min:7|max:30',
            'password_confirmation' => 'required|same:password',
            'mobile' => 'required|phone:CA,US',
        ];
    }
}

