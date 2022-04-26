<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDependenteRequest;
use App\Http\Requests\UpdateDependenteRequest;
use App\Models\Dependente;
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
    public function store(StoreDependenteRequest $request)
    {
        //
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
        return view("admin.dependentes.edit", ["dependente"=>$dependente])->with("success", "Dependente atualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dependente  $dependente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dependente $dependente)
    {
        //
    }
}
