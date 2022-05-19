<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EsqueciSenhaController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function enviarEmail(Request $request) {
        $request->validate([
            "cpf" => "required|max:14"
        ]);

        $token = Str::random(64);
        $user = Usuario::whereCpf($this->cleanCpf($request->input("cpf")))->first();
        if (!$user) return back()->withErrors(["cpf"=>"CPF não encontrado."]);
        $user->remember_token = $token;
        $user->save();

        // envia email.
        Mail::to($user->email)->send(new ResetPassword($user->remember_token));
        if (count(Mail::failures()) == 0) {
            return back()->with("success", "Verifique o seu e-mail (".$user->email.") e clique no link de recuperação de senha.");
        } else {
            return back()->withErrors("email", "Não foi possível enviar o email de recuperação.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function showFormRecuperacao(Request $request) {
        return view("recuperacao");
    }

    /**
     * Display the specified resource.
     *
     * @param  String  $token
     * @return \Illuminate\Http\Response
     */
    public function showFormRecuperar($token) {
        // dd($token);
        return view("recuperar", ["token"=>$token]);
    }


    /**
     * Display the specified resource.
     *
     * @param  Request  $token
     * @return \Illuminate\Http\Response
     */
    public function reset(Request $request) {
        $request->validate([
            "senha" => "required|confirmed",
            "senha_confirmation" => "required",
            "token" => "required|string"
        ]);
        $usuario = Usuario::whereRememberToken($request->input("token"))->first();
        if (!$usuario) return back()->withErrors(["token"=>"Esse link não é mais válido."]);
        $usuario->senha = $request->input("senha");
        $usuario->save();
        $usuario->remember_token = "";
        $usuario->save();
        Auth::logout();
        return redirect()->route("cliente.login")->with("success", "Senha atualizada com sucesso.");
    }
}
