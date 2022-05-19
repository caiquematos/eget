<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoRequest;
use App\Mail\Contato as ContatoMailable;
use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\Contato;

class HomeController extends Controller
{
    public function index() {
        $faqs = Faq::whereAtivo(1)->get();
        return view("home", ["faqs" => $faqs]);
    }

    public function contato(StoreContatoRequest $request)
    {
       $contato = new Contato();
       $contato->fill($request->all());
       $contato->save();

       return back()->with("success", "Mensagem enviada com sucesso.");
    }
}
