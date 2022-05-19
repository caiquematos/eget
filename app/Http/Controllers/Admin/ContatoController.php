<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::all();
        return view("admin.contatos.index", ["contatos"=> $contatos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato)
    {
        $contato->delete();
        return redirect()->back()->with("success", "Mensagem removida com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function deletar(Contato $contato)
    {
        $contato->delete();
        return redirect()->back()->with("success", "Mensagem removida com sucesso.");
    }

    /**
     * Marca recurso como ativado no db.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ativar(Request $request)
    {
        $contato = Contato::find($request->input("contato_id"));
        if ($request->input("status") == "true")
            $contato->lida = 1;
        else
            $contato->lida = 0;
        $contato->save();
        $this->resposta["contato"] = $contato;
        return $this->resposta;
    }

}
