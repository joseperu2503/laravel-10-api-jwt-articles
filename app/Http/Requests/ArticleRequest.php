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
            'description.required' => 'La descripcion es obligatoria',
            'price.required' => 'El precio es obligatorio',
            'stock.required' => 'El stock es obligatorio',
            'price.numeric' => 'El precio debe ser un numero',
            'stock.numeric' => 'El stock debe ser un numero',
        ];
    }
}
