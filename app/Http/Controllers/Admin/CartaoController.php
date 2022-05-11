<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cartao;
use App\Models\Usuario;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function show(Cartao $cartao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartao $cartao)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartao  $cartao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartao $cartao)
    {
        //
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
