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
use Illuminate\Support\Facades\Auth;
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
        $clientes = Usuario::select('usuarios.*')
            ->leftjoin('role_usuario', 'usuarios.id', '=', 'role_usuario.id_usuario')
            ->where('role_usuario.id_role', config('constants.ROLES.CLIENTE.id'))
            ->where('usuarios.usuario_id', Auth::user()->id)
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
        if (!$this->isCpfValido($request->input('cpf')))
            return back()->withInput()->withErrors(["cpf" => "Digite um CPF válido."]);

        $cliente = new Usuario();
        $cliente->usuario_id = Auth::user()->id;
        $cliente->bairro = $request->bairro;
        $cliente->celular = $request->celular;
        $cliente->cep = $request->cep;
        $cliente->cidade = $request->cidade;
        $cliente->complemento = $request->complemento;
        $cliente->cpf = $request->input('cpf');
        $cliente->endereco = $request->endereco;
        $cliente->estado = $request->estado;
        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->save();

        if ($cliente) {
            // Gerencia papel do usuário.
            $cliente->roles()->sync([config('constants.ROLES.CLIENTE.id')]);
            return redirect()->route('admin.cliente.create')->with(["success" => "Cliente adicionado com sucesso."]);
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
        return view("admin.clientes.edit", ["cliente" => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $cliente)
    {

        return view("admin.clientes.edit", ["cliente" => $cliente]);
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
        if (!$this->isCpfValido($request->input("cpf")))
            return back()->withInput()->withErrors(["cpf" => "Digite um CPF válido."]);

        $cliente->fill($request->all())->save();
        return redirect()->back()->with("success", "Cliente atualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $cliente)
    {
        $cliente->delete();
        return redirect()->back()->with("success", "Cliente removido com sucesso.");
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
}
