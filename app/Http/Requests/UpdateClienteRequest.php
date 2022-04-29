<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'cpf' => $this->cleanCpf($this->cpf)
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|unique:usuarios,email,'.$this->cliente->id.',id,deleted_at,NULL',
            'cpf' => 'required|size:11|unique:usuarios,cpf,'.$this->cliente->id.',id,deleted_at,NULL',
            'bairro' => 'required|string|max:100',
            'celular' => 'required|string|max:16',
            'cep' => 'required|string|max:9',
            'cidade' => 'required|string',
            'como_conheceu' => 'required|string|max:50',
            'complemento' => 'required|string|max:80',
            'endereco' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'estado_civil' => 'required|numeric',
            'local_retirada' => 'required|string|max:50',
            'nascimento' => 'required|date',
            'nome' => 'required|string|max:255',
            'numero' => 'required|string|max:6',
            'profissao' => 'required|string|max:255',
            'renda' => 'required|numeric',
            'sexo' => 'required|numeric',
            'telefone' => 'required|string|max:14',
        ];
    }

    /**
     * Limpa máscara do cpf.
     *
     * @param  string  $value
     * @return void
     */
    private function cleanCpf($cpf) {
        $chars = ['.', '-'];
        return str_replace($chars, "", trim($cpf));
    }
}
