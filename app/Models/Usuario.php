<?php

namespace App\Models;

class Usuario extends BaseModel
{

    /**
     * Inicializa cpf.
     *
     * @param  string  $value
     * @return string
     */
    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = $this->cleanCpf($value);
    }

    /**
     * Inicializa celular.
     *
     * @param  string  $value
     * @return string
     */
    public function setCelularAttribute($value)
    {
        $this->attributes['celular'] = $this->cleanTelefone($value);
    }

    /**
     * Inicializa telefone.
     *
     * @param  string  $value
     * @return string
     */
    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = $this->cleanTelefone($value);
    }

    /**
     * Inicializa cep.
     *
     * @param  string  $value
     * @return string
     */
    public function setCepAttribute($value)
    {
        $this->attributes['cep'] = $this->cleanCep($value);
    }

    /**
     * Get data de nascimento do usuário.
     *
     * @return string
     */
    public function getNascimentoAttribute($value)
    {
        return date("d/m/Y", strtotime($value));
    }
}
