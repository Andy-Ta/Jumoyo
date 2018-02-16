<?php
/**
 * Created by PhpStorm.
 * User: quanta
 * Date: 2018-01-20
 * Time: 1:15 PM
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusinessEditRequest extends FormRequest
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
            'email' => 'email|unique:clients,email',
            'mobile' => 'phone:CA,US',
            'address' => ['required', "regex:/^(\s\d\p{L}+\'\.(?:. |-| |'))*[\s\d\p{L}\'\.]*$/i", 'max:255'],
            'country' => 'required|regex:/^[a-zA-Z]{3}$/i|max:3',
            'state' => 'required|regex:/[A-Za-z\'\.\-\s\,]/i|max:255',
            'city' => ['required', 'regex:/^([a-zA-Z\W]+(?:. |-| |\'))*[a-zA-Z\W]*$/i', 'max:255'],
            'postal_code' => ['required', "regex:/^^(\s\d\p{L}+\'(?:. |-| |'))*[\s\d\p{L}\']*$/i", 'max:255']

            /**,
            'facebook' => 'regex:/^[a-z ,.\'-]+$/i|max:255',
            'twitter' => 'regex:/^[a-z ,.\'-]+$/i|max:255',
            'instagram' => 'regex:/^[a-z ,.\'-]+$/i|max:255',
             **/
        ];
    }
}