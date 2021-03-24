<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProcedimentoRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'descricao' => ['required', 'string', 'max:400'],
            'preco' => ['required', 'numeric'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Nome é obrigatório",
            'name.max' => "O nome tem que ter menos de 100 caracteres",
            'descricao.required' => "Descrição é obrigatório",
            'descricao.max' => "Descrição pode ter no maximo 400 caracteres",
            'preco.required' => "O preco é obrigatorio",
        ];
    }
}
