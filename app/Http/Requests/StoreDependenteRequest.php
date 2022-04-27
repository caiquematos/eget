<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDependenteRequest extends FormRequest
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
            'cpf' => 'required|size:14|unique:dependentes',
            'nascimento' => 'required|date',
            'nome' => 'required|string|max:255',
            'sexo' => 'required|numeric',
            'parentesco' => 'required|numeric',
        ];
    }
}
