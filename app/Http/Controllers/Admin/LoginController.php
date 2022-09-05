<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;

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
     * Log the user in the application.
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

            // realiza login
            // dd($credentials);
            Auth::attempt($credentials);
            if (Auth::check()) {
                $request->session()->regenerate();
                return redirect()->route('admin.cliente.index')->with(["success" => "Cadastro realizado com sucesso."]);
            }
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
