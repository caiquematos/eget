<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cartao extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id', '_token'];
    protected $table = "cartoes";

    /**
     * Retorna o cliente proprietário do cartão.
     */
    public function cliente()
    {
        return $this->belongsTo(Usuario::class);
    }


    /**
     * Retorna o cliente proprietário do cartão.
     */
    public function dependente()
    {
        return $this->belongsTo(Dependente::class);
    }

}
