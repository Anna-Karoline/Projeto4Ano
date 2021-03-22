<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telefone' => ['required', 'string', 'min:11','max:12'],
            'cpf'  => ['required', 'string', 'min:11', 'max:14'],
            'endereco' => ['required', 'string'],
        ];
    }
    public function messages()
    {
        return [
            'name.requered' => "Nome é obrigatório",
            'email.requered' => "Email é obrigatório",
            'email.unique' => "Esse email já está em uso",
            'telefone.requered' => "Telefone é obrigatório",
            'telefone.min' => "Numero com  mais de 11 caracteres",
            'telefone.max' => "Numero com  menos de 12 caracteres",
            'cpf.requered' => "CPF é obrigatório",
            'cpf.min' => "Necessário CPF com  mais de 11 caracteres",
            'cpf.max' => "Necessário CPF com  menos de 14 caracteres",
            'endereco.requered' => "O edereço é obrigatório é obrigatório",

            
        ];
    }
}
