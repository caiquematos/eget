<?php

use App\Http\Controllers\Admin\CartaoController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\ClienteController as AdminClienteController;
use App\Http\Controllers\Admin\ContatoController;
use App\Http\Controllers\Admin\DependenteController as AdminDependenteController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DependenteController;
use App\Http\Controllers\EsqueciSenhaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Models\Contato;
use App\Models\Dependente;
use App\Models\Faq;
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

        // Rotas 'Contato'
        Route::resource("contato", ContatoController::class);
        Route::prefix('contato')->name('contato.')->group(function () {
            Route::post("ativar", [ContatoController::class, 'ativar'])->name('ativar');
            Route::get("deletar/{contato}", function (Contato $contato) {
                return App::make('App\Http\Controllers\Admin\ContatoController')->deletar($contato);
            })->name('deletar');
        });

        // Rotas 'Faq'
        Route::resource("faq", FaqController::class);
        Route::prefix('faq')->name('faq.')->group(function () {
            Route::post("ativar", [FaqController::class, 'ativar'])->name('ativar');
            Route::get("deletar/{faq}", function (Faq $faq) {
                return App::make('App\Http\Controllers\Admin\FaqController')->deletar($faq);
            })->name('deletar');
        });

        // Rotas 'Cartão'
        Route::resource("cartao", CartaoController::class)->except(['create', 'index', 'store']);
        Route::prefix('cartao')->name('cartao.')->group(function () {
            Route::post("ativar", [CartaoController::class, 'ativar'])->name('ativar');
            Route::get("index/{cliente}", [CartaoController::class, 'index'])->name('index');
            Route::get("create/{cliente}", [CartaoController::class, 'create'])->name('create');
            Route::get("store/{cartao}", [CartaoController::class, 'store'])->name('store');
            Route::get("deletar/{cartao}", [CartaoController::class, 'deletar'])->name('deletar');
        });

        // Rotas 'Dependente'
        Route::resource("dependente", AdminDependenteController::class);
        Route::prefix('dependente')->name('dependente.')->group(function () {
            Route::post("ativar", [AdminDependenteController::class, 'ativar'])->name('ativar');
            Route::get("adicionar/{cliente}", function (Usuario $cliente) {
                return App::make('App\Http\Controllers\Admin\DependenteController')->adicionar($cliente);
            })->name('adicionar');
            Route::get("deletar/{dependente}", function (Dependente $dependente) {
                return App::make('App\Http\Controllers\Admin\DependenteController')->deletar($dependente);
            })->name('deletar');
        });

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

        // Rotas raizes
        Route::get('/home', [UsuarioController::class, 'index'])->name('home');
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

// Rotas 'Admin' (O laravel não aceita 'admin' como rota, por conter pasta chamada 'admin' na pasta public)
Route::get('/', function () {
    return redirect()->route('admin.cliente.index');
})->name('adm')->middleware(['auth', 'role:admnistrador']);

/** /Rotas 'Admin' */
