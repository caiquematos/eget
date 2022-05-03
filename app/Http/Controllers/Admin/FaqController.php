<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view("admin.faqs.index", ["faqs"=>$faqs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.faqs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {
        $faq = new Faq();
        $faq->fill($request->all())->save();
        return redirect()->back()->with("success", "Faq adicionada com sucesso.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return view("admin.faqs.edit", ["faq"=>$faq]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view("admin.faqs.edit", ["faq"=>$faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFaqRequest $request, Faq $faq)
    {
        $faq->update($request->all());
        return redirect()->back()->with("success", "Faq atualizada com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->back()->with("success", "Faq removida com sucesso.");
    }

     /**
     * Marca recurso como deletado no db.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function deletar(Faq $faq)
    {
        $faq->delete();
        return redirect()->back()->with("success", "Faq removida com sucesso.");
    }

     /**
     * Marca recurso como ativado no db.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ativar(Request $request)
    {
        $faq = Faq::find($request->input("faq_id"));
        if ($request->input("status") == "true")
            $faq->ativo = 1;
        else
            $faq->ativo = 0;
        $faq->save();
        $this->resposta["faq"] = $faq;
        return $this->resposta;
    }
}
