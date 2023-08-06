<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'Description is required.',
            'price.required' => 'Price is required.',
            'stock.required' => 'Stock is required.',
            'price.numeric' => 'Price must be a number.',
            'stock.numeric' => 'Stock must be a number.',
        ];
    }
}
