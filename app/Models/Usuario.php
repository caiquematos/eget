<?php

namespace App\Models;
use Illuminate\Support\Facades\Hash;
class Usuario extends BaseModel
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha', 'remember_token',
    ];

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_usuario', 'id_usuario', 'id_role')->withTimestamps();
    }

    /**
     * The roles that belong to the user.
     */
    public function dependentes()
    {
        return $this->hasMany(Dependente::class, 'id_usuario', 'id');
    }

    /**
     * The roles that belong to the user.
     */
    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class, 'id_usuario', 'id');
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
     * Inicializa cpf.
     *
     * @param  string  $value
     * @return string
     */
    public function setSenhaAttribute($value)
    {
        $this->attributes['senha'] =  Hash::make($value);
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

    /**
     * Modifica a referência padrão do atributo de senha 'password' para o mecanismo de autenticação.
     *
     * @return string
     */
    public function getAuthPassword() {
        return $this->senha;
    }

    /**
     * Verifica se o usuário tem o respectivo papel.
     *
     * @param  string  $role
     * @return boolean
     */
    public function hasRole($role)
    {
      if ($this->roles()->where("name", $role)->first()) {
        return true;
      }
      return false;
    }
}
