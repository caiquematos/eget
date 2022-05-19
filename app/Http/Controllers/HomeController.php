<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoRequest;
use App\Mail\Contato as ContatoMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Faq;
use App\Models\Contato;


class HomeController extends Controller
{

    private $destinatario;

    public function __construct()
    {
        $this->destinatario = env("CONTATO_DESTINATARIO");
    }

    public function index() {
        $faqs = Faq::whereAtivo(1)->get();
        return view("home", ["faqs" => $faqs]);
    }

    public function contato(StoreContatoRequest $request)
    {
        $contato = new Contato();
        $contato->fill($request->all());
        $contato->save();

        // envia email.
        Mail::to($this->destinatario)->send(new ContatoMailable($contato));
        if (count(Mail::failures()) == 0) {
            return back()->with("success", "Mensagem enviada com sucesso.");
        } else {
            return back()->withErrors("email", "Não foi possível enviar a mensagem. Tente novamente.");
        }

    }
}
