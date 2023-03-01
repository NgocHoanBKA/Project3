<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
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
            'product_code' => 'required|max:255',
            'product_name' => 'required|max:255',
            'product_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'product_image' => 'The image is size so big.',
        ];
    }
}
