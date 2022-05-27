<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cartao;
use App\Models\Dependente;
use App\Models\Usuario;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CartaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Usuario $cliente)
    {
        return view("admin.cartoes.index")->with("cliente", $cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Usuario $cliente)
    {
        return view("admin.cartoes.create", ["cliente"=>$cliente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Cartao $cartao)
    {
        $novo_cartao = new Cartao();
        $novo_cartao->fill($cartao->toArray());
        $cartao->status = config("constants.STATUS_CARTAO.CANCELADO");
        $cartao->ativo = 0;
        $cartao->save();
        $novo_cartao->status = config("constants.STATUS_CARTAO.ANDAMENTO");
        $novo_cartao->save();
        return redirect()->back()->with("success", "Novo cartão gerado com sucesso.");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function show(Cartao $cartao)
    {
        return view("admin.cartoes.edit")->with("cartao", $cartao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartao $cartao)
    {
        return view("admin.cartoes.edit")->with("cartao", $cartao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartao $cartao)
    {
        $inputs = $request->validate([
            'status' => 'required|numeric'
        ]);

        // is owner dependente ou titular?
        $titular_id = $cartao->usuario_id;
        if (!$cartao->usuario_id) {
            // owner is a dependente
            $dependente = Dependente::find($cartao->dependente_id);
            $hasCartaoAtivo = $dependente->cartoes->where("status", "!=", 3)->first();
            $titular = Usuario::find($dependente->id_usuario);
            $titular_id = $titular->id;
        } else {
            // owner is a titular
            $cliente = Usuario::find($cartao->usuario_id);
            $hasCartaoAtivo = $cliente->cartoes->where("status", "!=", 3)->first();
        }

        // verificar se é possível atualizar o status.
        if ($hasCartaoAtivo && $request->input("status") != config("constants.STATUS_CARTAO.CANCELADO"))
            return back()->withErrors("status", "Esse usuário já possui um cartão ativo, para realziar essa operação é necessário cancelar todos os cartões ativos.");

        // atualiza status do cartão
        $cartao->fill($inputs)->save();

        return redirect()->route("admin.cartao.index", $titular_id)->with("success", "Cartão atualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartao $cartao)
    {
        $cartao->delete();
        return redirect()->back()->with("success", "Cartão removido com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function deletar(Cartao $cartao)
    {
        $cartao->delete();
        return redirect()->back()->with("success", "Cartão removido com sucesso.");
    }

    /**
     * Marca recurso como ativado no db.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ativar(Request $request)
    {
        $cartao = Cartao::find($request->input("cartao_id"));
        if ($request->input("status") == "true")
            $cartao->ativo = 1;
        else
            $cartao->ativo = 0;
        $cartao->save();
        $this->resposta["cartao"] = $cartao;
        return $this->resposta;
    }
}
