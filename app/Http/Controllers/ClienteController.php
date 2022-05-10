<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use App\Models\Usuario;
use App\Models\Pagamento;
use App\Models\Dependente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Usuario();
        $cliente->fill($request->all())->save();

        // Gerencia papel do usuário.
        $cliente->roles()->sync([config('constants.ROLES.CLIENTE.id')]);

        // Gerencia pagamento.
        $pagamento = new Pagamento();
        $pagamento->id_usuario = $cliente->id;
        $pagamento->status = 1;
        $pagamento->save();

        // Gerencia dependentes.
        if (!empty($request->input("dependentes"))) {
            $dependentes = $this->mapear_form_array($request->input("dependentes"));
            foreach($dependentes as $dependente) {
                 $dependente = (Object) $dependente;
                 $dependente_obj = new Dependente();
                 $dependente_obj->id_usuario = $cliente->id;
                 $dependente_obj->cpf = $dependente->cpf;
                 $dependente_obj->nome = $dependente->nome;
                 $dependente_obj->sexo = $dependente->sexo;
                 $dependente_obj->parentesco = $dependente->parentesco;
                 $dependente_obj->nascimento = $dependente->nascimento;
                 $dependente_obj->save();
            }
        }
        $this->response["success"] = true;
        $this->response["cliente"] = $cliente;
        return redirect()->route('cliente.create')->with(["success"=>"Cliente adicionado com sucesso."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

      /**
     * Inverte o nível dos índices de um array.
     * utilizado para vetores de inputs de tamanhos indefinidos.
     * 
     * @param  Array  $conjunto
     * @return Array
     */
    private function mapear_form_array($conjunto) {
        $conjunto_convertido = [];
        foreach ($conjunto as $key1 => $item) {                                  
            foreach ($item as $key2=>$value) {
                $conjunto_convertido[$key2][$key1] = $value;
            }
        }
        return $conjunto_convertido;
    }
}
