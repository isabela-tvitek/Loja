<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest {
    public function rules() {
        return [
            'name'  => 'required|min:3|max:40',
            'email' => ['email', 'unique:stores']
        ];
    }

    public function messages(){
        return [
            'required' => 'O campo ":attribute" é obrigatório!',
            'min'      => 'O campo ":attribute" deve ter no mínimo :min caracteres!',
            'max'      => 'O campo ":attribute" deve ter no maximo :max caracteres!',
            'unique'   => 'Este ":attribute" não se encontra disponivel no momento!'
        ];
    }
}
