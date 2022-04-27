<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreDependenteRequest;
use App\Http\Requests\UpdateDependenteRequest;
use App\Models\Dependente;
use App\Models\Usuario;
use Illuminate\Http\Request;

class DependenteController extends Controller
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
    public function adicionar(Usuario $cliente)
    {
        return view("admin.dependentes.create", ["cliente"=>$cliente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.dependentes.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDependenteRequest $request)
    {
        $dependente = new Dependente();
        $dependente->fill($request->validated());
        $dependente->id_usuario = $request->input("id_usuario");
        $dependente->save();

        $cliente = Usuario::find($dependente->id_usuario);
        return redirect()->back()->with(["success"=>"Dependente adicionado com sucesso.", "cliente"=>$cliente]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function show(Dependente $dependente)
    {
        return view("admin.dependentes.edit", ["dependente"=>$dependente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function edit(Dependente $dependente)
    {
        return view("admin.dependentes.edit", ["dependente"=>$dependente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDependenteRequest $request, Dependente $dependente)
    {
        $this->validate($request, [
            'cpf' => 'required|size:14|unique:dependentes,cpf,'.$dependente->id,
        ]);
        $dependente->fill($request->all())->save();
        $dependente->atualizado = true;
        return redirect()->route("admin.dependente.edit", ["dependente"=>$dependente])->with("success", "Dependente atualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependente $dependente)
    {
    }

    
    /**
     * Marca recurso como deletado no db.
     *
     * @param  \App\Models\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function deletar(Dependente $dependente)
    {
        $cliente = Usuario::find($dependente->id_usuario);
        $dependente->deletado = 1;
        $dependente->save();
        $dependentes = Dependente::whereIdUsuario($cliente->id)->whereDeletado(0)->get();
        $cliente->dependentes = $dependentes;
        return redirect()->route("admin.cliente.edit", ["cliente"=>$cliente])->with("success", "Dependente removido com sucesso.");
    }
}
