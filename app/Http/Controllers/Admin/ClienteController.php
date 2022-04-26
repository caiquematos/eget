<?php

namespace App\Http\Controllers\Admin;

use App\Models\Usuario;
use App\Models\Dependente;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Usuario::whereDeletado("deletado", 0)->get();
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
        // $cliente->animal = $request->animal;
        // $cliente->assinatura = $request->assinatura;
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
        // $cliente->regiao = $request->regiao;
        $cliente->renda = $request->renda;
        $cliente->senha = Hash::make($request->senha);
        $cliente->sexo = $request->sexo;
        $cliente->telefone = $request->telefone;
        $cliente->save();
        
        // Gerencia dependentes.
        if ($cliente){
            if ($request->input("dependentes")) {
               $dependentes = $this->mapear_form_array($request->input("dependentes"));
               foreach($dependentes as $dependente) {
                   $dependente = (Object) $dependente;
                    // echo var_dump($dependente) . "<br><br>";
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
            $this->response["message"] = "Cliente adicionado com sucesso.";
            return redirect('/admin/cliente/create')->with("success",true);
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
        $this->validate($request, [
            'email' => 'required|unique:usuarios,email,'.$cliente->id,
        ]);
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
}
