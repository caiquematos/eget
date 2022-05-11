<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, String $role)
    {
      
        if ($request->user()->hasRole($role))
            return $next($request);
        else {
            switch($role) {
                case config("constants.ROLES.ADMNISTRADOR.name"):
                    return redirect()->route("admin.login")->withErrors(["permissao"=>"Esse usuário não tem permissão para acessar essa página."]);
                break;
                case config("constants.ROLES.CLIENTE.name"):
                    return redirect()->route("cliente.login")->withErrors(["permissao"=>"Esse usuário não tem permissão para acessar essa página."]);
                break;
            }
        }

    }
}
