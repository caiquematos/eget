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
            'cpf' => 'required|size:11|unique:usuarios,cpf,' . $this->cliente->id . ',id,deleted_at,NULL',
            'bairro' => 'required|string|max:100',
            'celular' => 'required|string|max:16',
            'cep' => 'required|string|max:9',
            'cidade' => 'required|string',
            'complemento' => 'string|max:80',
            'endereco' => 'required|string|max:255',
            'estado' => 'required|string|max:2',
            'nome' => 'required|string|max:255',
            'telefone' => 'string|max:14',
        ];
    }

    /**
     * Limpa máscara do cpf.
     *
     * @param  string  $value
     * @return void
     */
    private function cleanCpf($cpf)
    {
        $chars = ['.', '-'];
        return str_replace($chars, "", trim($cpf));
    }
}
