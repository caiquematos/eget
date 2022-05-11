<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Log the user in the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $credentials = $request->validate([
            'cpf' => 'required',
            'password' => 'required'
        ]);
        $credentials["cpf"] = $this->cleanCpf($credentials["cpf"]);
        Auth::attempt($credentials);

        if (Auth::check()) {
            $request->session()->regenerate();
            return redirect()->route('cliente.cartao');
        }

        return back()->withErrors([
            'login' => 'CPF ou Senha não encontrado.',
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('cliente.login');
    }
}
