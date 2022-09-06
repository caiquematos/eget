<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\ClienteController as AdminClienteController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Models\Usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** Rotas 'Admin' */

Route::prefix('/admin')->name('admin.')->group(function () {

    Route::middleware(['auth', 'role:admnistrador'])->group(function () {

        // Rotas 'Cliente'
        Route::resource("cliente", AdminClienteController::class);
        Route::prefix('cliente')->name('cliente.')->group(function () {
            Route::post("ativar", [AdminClienteController::class, 'ativar'])->name('ativar');
            Route::get("deletar/{cliente}", function (Usuario $cliente) {
                return App::make('App\Http\Controllers\Admin\ClienteController')->deletar($cliente);
            })->name('deletar');
        });

        // Rotas 'Usuário'
        Route::resource("usuario", UsuarioController::class);
        Route::prefix('usuario')->name('usuario.')->group(function () {
            Route::post("ativar", [UsuarioController::class, 'ativar'])->name('ativar');
            Route::get("deletar/{usuario}", function (Usuario $usuario) {
                return App::make('App\Http\Controllers\Admin\UsuarioController')->deletar($usuario);
            })->name('deletar');
        });
    });

    // Rotas 'Auth'
    Route::post('/login', [AdminLoginController::class, 'index'])->name('logar');
    Route::get('/login',  function () {
        return view('admin.login');
    })->name('login');
    Route::post('/cadastrar', [AdminLoginController::class, 'cadastrar'])->name('cadastrar');
    Route::get('/cadastrar', function () {
        return view('admin.cadastrar');
    })->name('cadastrar');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});

// Home
Route::get('/', function () {
    return redirect()->route('admin.cliente.index');
})->name('adm')->middleware(['auth', 'role:admnistrador']);

/** /Rotas 'Admin' */
