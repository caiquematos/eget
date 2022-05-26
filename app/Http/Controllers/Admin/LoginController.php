<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

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


        // verifica se usuário está ativo.
        $usuario = Usuario::whereCpf($credentials["cpf"])->whereAtivo(1)->first();
        if (!$usuario)
            return back()->withErrors(['login' => 'Esse usuário não tem permissão para acessar essa área.',]);

        Auth::attempt($credentials);
        if (Auth::check()) {
            $request->session()->regenerate();
            return redirect()->route('admin.usuario.index');
        }

        return back()->withErrors(['login' => 'CPF ou Senha não encontrado.',]);
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

        return redirect()->route('admin.login');
    }
}
