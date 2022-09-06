<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contato;

class LoginController extends Controller
{
    /**
     * Log the user in the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

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
            return redirect()->route('admin.cliente.index');
        }

        return back()->withInput()->withErrors(['login' => 'CPF ou Senha não encontrado.',]);
    }

    /**
     * Register the user in the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cadastrar(StoreUsuarioRequest $request)
    {

        $credentials = $request->validate([
            'cpf' => 'required',
            'senha' => 'required'
        ]);
        $usuario = new Usuario();
        $usuario->fill($request->all())->save();

        if ($usuario) {
            // Gerencia papel do usuário.
            $usuario->roles()->sync([config('constants.ROLES.ADMNISTRADOR.id')]);

            // envia email.
            Mail::to($usuario->email)->send(new Contato($usuario));
            if (count(Mail::failures()) != 0)
                return redirect()->route('admin.login')->with(["success" => "Cadastro realizado com sucesso! Faça login para entrar no sistema."])->withErrors("email", "E-mail de confirmação não pôde ser enviado. Mas não se preocupe, você pode continuar com o login.");

            // Redirect
            return redirect()->route('admin.login')->with(["success" => "Cadastro realizado com sucesso! Faça login para entrar no sistema."]);
        }

        return back()->withInput()->withErrors(['cadastro' => 'Algo deu errado']);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
