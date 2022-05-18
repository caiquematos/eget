<?php

namespace App\Http\Controllers\Admin;

use App\Models\Usuario;
use App\Models\Dependente;
use App\Models\Pagamento;
use App\Models\Cartao;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDependenteRequest;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Usuario::select('usuarios.*', 'pagamentos.status', 'pagamentos.data as data_pagamento')
            ->leftjoin('pagamentos', 'usuarios.id', '=', 'pagamentos.id_usuario')
            ->leftjoin('role_usuario', 'usuarios.id', '=', 'role_usuario.id_usuario')
            ->where('role_usuario.id_role', config('constants.ROLES.CLIENTE.id'))
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
        $cliente->senha = $request->senha;
        $cliente->sexo = $request->sexo;
        $cliente->telefone = $request->telefone;
        $cliente->save();

        if ($cliente){
            // Gerencia papel do usuário.
            $cliente->roles()->sync([config('constants.ROLES.CLIENTE.id')]);

            // Gerencia pagamento.
            $pagamento = new Pagamento();
            $pagamento->id_usuario = $cliente->id;
            $pagamento->status = 1;
            $pagamento->save();

            // Gerencia cartão titular.
            $cartao = new Cartao();
            $cartao->usuario_id = $cliente->id;
            $cartao->save();

            // Gerencia dependentes.
            $validator_errors = [];
            if (!empty($request->input("dependentes"))) {
               $dependentes = $this->mapear_form_array($request->input("dependentes"));
               foreach($dependentes as $key=>$dependente) {
                    if (!$this->validarDependente($dependente)){
                        $validator_errors["dependente-$key"] = "Dependente $dependente[nome] não foi inserido: CPF utilizado já cadastrado!";
                        continue;
                    }
                    $dependente = (Object) $dependente;
                    $dependente_obj = new Dependente();
                    $dependente_obj->id_usuario = $cliente->id;
                    $dependente_obj->cpf = $dependente->cpf;
                    $dependente_obj->nome = $dependente->nome;
                    $dependente_obj->sexo = $dependente->sexo;
                    $dependente_obj->parentesco = $dependente->parentesco;
                    $dependente_obj->nascimento = $dependente->nascimento;
                    $dependente_obj->save();
                    if ($dependente_obj) {
                        // Gerencia cartão dependente.
                        $cartao = new Cartao();
                        $cartao->dependente_id = $dependente_obj->id;
                        $cartao->save();
                    }
               }
            }
            $this->response["success"] = true;
            $this->response["cliente"] = $cliente;
            return redirect()->route('admin.cliente.create')->with(["success"=>"Cliente adicionado com sucesso."])->withErrors($validator_errors);
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
        $dependentes = Dependente::whereIdUsuario($cliente->id)->get();
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
        $dependentes = Dependente::whereIdUsuario($cliente->id)->get();
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
        $cliente->fill($request->all())->save();
        $dependentes = Dependente::whereIdUsuario($cliente->id)->get();
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
        $cliente->delete();
        return redirect()->back()->with("success", "Cliente removido com sucesso.");
    }

     /**
     * Marca recurso como ativado no db.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ativar(Request $request)
    {
        $cliente = Usuario::find($request->input("cliente_id"));
        if ($request->input("status") == "true")
            $cliente->ativo = 1;
        else
            $cliente->ativo = 0;
        $cliente->save();
        $this->resposta["cliente"] = $cliente;
        return $this->resposta;
    }

    private function validarDependente($dependente) {
        $dependente['cpf'] = $this->cleanCpf($dependente['cpf']);
        $has_dependente = Dependente::whereCpf($dependente["cpf"])->first();
        if ($has_dependente) return false;
        return true;
    }
}
