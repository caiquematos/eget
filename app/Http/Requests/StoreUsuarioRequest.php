<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest
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
            'email' => 'required|email|unique:usuarios,email,NULL,id,deleted_at,NULL',
            'cpf' => 'required|size:11|unique:usuarios,cpf,NULL,id,deleted_at,NULL',
            'nome' => 'required|string|max:255',
            // 'tipo' => 'required|numeric',
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
