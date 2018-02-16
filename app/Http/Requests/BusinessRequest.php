<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class BusinessRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-z ,.\'-]+$/i|max:255',
            'address' => ['required', 'max:255'],
            'country' => 'required|regex:/^[a-zA-Z]{3}$/i|max:3',
            'state' => 'required|regex:/[A-Za-z\'\.\-\s\,]/i|max:255',
            'city' => ['required', 'max:255'],
            'postal' => ['required', 'max:255'],
        ];
    }
}

