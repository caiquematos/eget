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
            'cpf' => 'required|size:11|unique:dependentes,cpf,NULL,id,deleted_at,NULL',
            'nascimento' => 'required|date',
            'nome' => 'required|string|max:255',
            'sexo' => 'required|numeric',
            'parentesco' => 'required|numeric',
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
