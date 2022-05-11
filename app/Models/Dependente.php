<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependente extends BaseModel
{
    use HasFactory;
    protected $guarded = ['id_usuario'];

    /**
     * Get the cliente that owns the dependente.
     */
    public function cliente()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

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
     * Get data de nascimento do dependente.
     *
     * @return string
     */
    public function getNascimentoAttribute($value)
    {
        return date("d/m/Y", strtotime($value));
    }

    /**
     * Os cartões que pertencem ao dependente.
     */
    public function cartoes()
    {
        return $this->hasMany(Cartao::class);
    }
}
