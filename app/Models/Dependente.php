<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependente extends BaseModel
{
    use HasFactory;

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
}
