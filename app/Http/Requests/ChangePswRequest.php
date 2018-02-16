<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ChangePswRequest extends FormRequest
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
            'currentPassword' => 'required|min:7|max:30',
            'newPassword' => 'required|confirmed|min:7|max:30',
            'newPassword_confirmation' => 'required|same:newPassword',
        ];
    }
}

