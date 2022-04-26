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
}
