<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ServiceEditRequest extends FormRequest
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
            'name' => 'required|regex:/^[\w ,.\'-]+$/i|max:255',
            'category' => "required|regex:/^[\w ,.'-]+$/i|max:255",
            'price' => 'regex:/^[\d\.]+$/i|max:20',
            'priceHourly' => 'regex:/^[\d\.]+$/i|max:20',
            'desc' => ['required', 'regex:/^([\w\W]+(?:. |-| |\'))*[\w\W]*$/i', 'max:10000']
        ];
    }
}

