<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $response;

    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->response = ["success"=>false, "message"=>"Não foi possível concluir a operação, tente novamente."];
    }

    /**
     * Limpa máscara do cpf.
     *
     * @param  string  $cpf
     * @return string
     */
    protected function cleanCpf($cpf) {
        $chars = ['.', '-'];
        return str_replace($chars, "", trim($cpf));
    }

    /**
     * Verifica ser cpf é válido.
     *
     * @param  string  $cpf
     * @return boolean
     */
    protected function isCpfValido($cpf) {
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }
}
