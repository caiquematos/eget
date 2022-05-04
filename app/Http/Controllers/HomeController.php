<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoRequest;
use Illuminate\Http\Request;
use App\Models\Faq;

class HomeController extends Controller
{
    public function index() {
        $faqs = Faq::whereAtivo(1)->get();
        return view("home", ["faqs" => $faqs]);
    }

    public function contato(StoreContatoRequest $request)
    {
       return $request->all();
    }
}
