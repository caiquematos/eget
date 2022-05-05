<?php

namespace App\Http\Controllers;

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
        $this->response = ["success"=>true, "message"=>""];
    }

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
}
