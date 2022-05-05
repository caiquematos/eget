<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Authenticatable
{
    use HasFactory, SoftDeletes;

    // Guarded from mass attribution.
    protected $guarded = ['id', '_token'];

    /**
     * Limpa máscara do cpf.
     *
     * @param  string  $value
     * @return void
     */
    protected function cleanCpf($cpf) {
        $chars = ['.', '-'];
        return str_replace($chars, "", trim($cpf));
    }

    /**
     * Limpa máscara do telefone.
     *
     * @param  string  $value
     * @return void
     */
    protected function cleanTelefone($telefone) {
        $chars = ['(',')','-',' '];
        return str_replace($chars, "", trim($telefone));
    }

    /**
     * Limpa máscara do cep.
     *
     * @param  string  $value
     * @return void
     */
    protected function cleanCep($cep) {
        $chars = ['.', '-'];
        return str_replace($chars, "", trim($cep));
    }
}
