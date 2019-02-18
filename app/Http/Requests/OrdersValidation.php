<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersValidation extends FormRequest
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
            'name' => ['required'],
            'document' => ['required', 'numeric', 'digits:11'],
            'shipping_address_street' => ['required'],
            'shipping_address_city' => ['required'],
            'shipping_address_state' => ['required'],
            'shipping_address_zipcode' => ['required']
        ];
    }
}
