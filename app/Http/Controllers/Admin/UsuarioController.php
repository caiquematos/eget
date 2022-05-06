<?php

namespace App\Http\Controllers\Admin;

use App\Models\usuario;
use App\Models\role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::whereHas('roles', function ($query) {
            $query->where('name','!=', config('constants.ROLES.CLIENTE.name'));
        })->get();
        return view("admin.usuarios.index")->with(["usuarios"=> $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view("admin.usuarios.create")->with(["roles"=> $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioRequest $request)
    {
        $usuario = new Usuario();
        $usuario->fill($request->except(["tipo"]));

        // gerar senha.
        $usuario->senha = Hash::make(substr($request->input("cpf"), 0, 6));
        $usuario->save();

        if (!empty($request->input("tipo"))) {
            $usuario->roles()->sync([$request->input("tipo")]);
        }

        return redirect()->back()->with("success","Usuário adicionado com sucesso.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        if(count($usuario->roles)){
            foreach($usuario->roles as $role) {
                $usuario->tipo = $role->id;
                break;
            }
        };
        $roles = Role::all();
        return view("admin.usuarios.edit", ["usuario"=>$usuario, "roles"=> $roles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        if(count($usuario->roles)){
            foreach($usuario->roles as $role) {
                $usuario->tipo = $role->id;
                break;
            }
        };
        $roles = Role::all();
        return view("admin.usuarios.edit", ["usuario"=>$usuario, "roles"=> $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, usuario $usuario)
    {
        $usuario->fill($request->except(["tipo"]))->save();
        if (!empty($request->input("tipo"))) {
            $usuario->roles()->sync([$request->input("tipo")]);
        }
        if(count($usuario->roles)){
            foreach($usuario->roles as $role) {
                $usuario->tipo = $role->id;
                break;
            }
        };
        $usuario->atualizado = true;
        return redirect()->back()->with("success","Usuário atualizado com sucesso.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        $usuario->delete();
        return redirect()->back()->with("success", "Usuário removido com sucesso.");
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function deletar(usuario $usuario)
    {
        $usuario->delete();
        return redirect()->back()->with("success", "Usuário removido com sucesso.");
    }


    /**
     * Marca recurso como ativado no db.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ativar(Request $request)
    {
        $usuario = Usuario::find($request->input("usuario_id"));
        if ($request->input("status") == "true")
            $usuario->ativo = 1;
        else
            $usuario->ativo = 0;
        $usuario->save();
        $this->resposta["usuario"] = $usuario;
        return $this->resposta;
    }
}
