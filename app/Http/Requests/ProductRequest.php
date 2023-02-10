<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {
    public function rules() {
        return [
            'name'      => 'required|min:3|max:60',
            'price'     => 'min:2|max:6',
            'store_id'  => 'integer',
            'stock'     => 'integer',
            'active'    => 'boolean'
        ];
    }

    public function messages(){
        return [
            'required'  => 'O campo ":attribute" é obrigatório!',
            'min'       => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
            'max'       => 'O campo ":attribute" deve ter no maximo :max caracteres!',
            'integer'   => 'O campo ":attribute" deve ser um valor inteiro!',
            'boolean'   => 'O campo ":attribute" deve ser verdadeiro ou falso!'
        ];
    }
}
