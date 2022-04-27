<?php

namespace App\Http\Controllers\Admin;

use App\Models\Usuario;
use App\Models\Dependente;
use App\Models\Pagamento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Usuario::leftjoin('usuarios_pagamentos', 'usuarios.id', '=', 'usuarios_pagamentos.id_usuario')
            ->whereDeletado("deletado", 0)
            ->select('usuarios.*', 'usuarios_pagamentos.status', 'usuarios_pagamentos.data as data_pagamento')
            ->get();
        $this->response["clientes"] = $clientes;
        return view("admin.clientes.index", $this->response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Usuario();
        $cliente->bairro = $request->bairro;
        $cliente->celular = $request->celular;
        $cliente->cep = $request->cep;
        $cliente->cidade = $request->cidade;
        $cliente->como_conheceu = $request->como_conheceu;
        $cliente->complemento = $request->complemento;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
        $cliente->endereco = $request->endereco;
        $cliente->estado = $request->estado;
        $cliente->estado_civil = $request->estado_civil;
        $cliente->local_retirada = $request->local_retirada;
        $cliente->nascimento = $request->nascimento;
        $cliente->nome = $request->nome;
        $cliente->numero = $request->numero;
        $cliente->profissao = $request->profissao;
        $cliente->renda = $request->renda;
        $cliente->senha = Hash::make($request->senha);
        $cliente->sexo = $request->sexo;
        $cliente->telefone = $request->telefone;
        $cliente->save();
        
        if ($cliente){
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
            return redirect()->route('admin.cliente.create')->with(["success"=>"Cliente adicionado com sucesso."]);
        }

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $cliente)
    {
        $dependentes = Dependente::whereIdUsuario($cliente->id)->whereDeletado(0)->get();
        $cliente->dependentes = $dependentes;
        return view("admin.clientes.edit", ["cliente"=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $cliente)
    {
        $dependentes = Dependente::whereIdUsuario($cliente->id)->whereDeletado(0)->get();
        $cliente->dependentes = $dependentes;
        return view("admin.clientes.edit", ["cliente"=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Usuario $cliente)
    {
        $this->validate($request, [
            'email' => 'required|unique:usuarios,email,'.$cliente->id,
            'cpf' => 'required|size:14|unique:usuarios,cpf,'.$cliente->id,
        ]);
        $cliente->fill($request->all())->save();
        $dependentes = Dependente::whereIdUsuario($cliente->id)->whereDeletado(0)->get();
        $cliente->dependentes = $dependentes;
        $cliente->atualizado = true;
        return view("admin.clientes.edit", ["cliente"=>$cliente])->with("success", "Cliente atualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $cliente)
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

    /**
     * Marca recurso como deletado no db.
     *
     * @param  \App\Models\Usuario  $cliente
     * @return \Illuminate\Http\Response
     */
    public function deletar(Usuario $cliente)
    {
        $cliente->deletado = 1;
        $cliente->save();
        return redirect()->back()->with("success", "Cliente removido com sucesso.");
    }
}
