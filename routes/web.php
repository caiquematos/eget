<?php

use App\Http\Controllers\Admin\CartaoController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\ClienteController as AdminClienteController;
use App\Http\Controllers\Admin\DependenteController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

        // Rotas 'Faq'
        Route::resource("faq", FaqController::class);
        Route::prefix('faq')->name('faq.')->group(function () {
            Route::post("ativar",[FaqController::class, 'ativar'])->name('ativar');
            Route::get("deletar/{faq}", function(Faq $faq) {
                return App::make('App\Http\Controllers\Admin\FaqController')->deletar($faq);
            })->name('deletar');
        });

        // Rotas 'Cartão'
        Route::resource("cartao", CartaoController::class)->except(['create', 'index']);
        Route::prefix('cartao')->name('cartao.')->group(function () {
            Route::post("ativar",[CartaoController::class, 'ativar'])->name('ativar');
            Route::get("index/{cliente}",[CartaoController::class, 'index'])->name('index');
            Route::get("create/{cliente}", [CartaoController::class, 'create'])->name('create');
            Route::get("deletar/{cartao}", [CartaoController::class, 'deletar'])->name('deletar');
        });

        // Rotas 'Dependente'
        Route::resource("dependente", DependenteController::class);
        Route::prefix('dependente')->name('dependente.')->group(function () {
            Route::post("ativar",[DependenteController::class, 'ativar'])->name('ativar');
            Route::get("adicionar/{cliente}", function(Usuario $cliente) {
                return App::make('App\Http\Controllers\Admin\DependenteController')->adicionar($cliente);
            })->name('adicionar');
            Route::get("deletar/{dependente}", function(Dependente $dependente) {
                return App::make('App\Http\Controllers\Admin\DependenteController')->deletar($dependente);
            })->name('deletar');
        });

        // Rotas 'Cliente'
        Route::resource("cliente", AdminClienteController::class);
        Route::prefix('cliente')->name('cliente.')->group(function () {
            Route::post("ativar",[AdminClienteController::class, 'ativar'])->name('ativar');
            Route::get("deletar/{cliente}", function(Usuario $cliente) {
                return App::make('App\Http\Controllers\Admin\ClienteController')->deletar($cliente);
            })->name('deletar');
        });

        // Rotas 'Usuário'
        Route::resource("usuario", UsuarioController::class);
        Route::prefix('usuario')->name('usuario.')->group(function () {
            Route::post("ativar",[UsuarioController::class, 'ativar'])->name('ativar');
            Route::get("deletar/{usuario}", function(Usuario $usuario) {
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
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

});

// Rotas 'Admin' (por algum motivo o laravel não aceita 'admin' como rota)
Route::get('/adm', function() {
    return redirect()->route('admin.usuario.index');
})->name('adm')->middleware(['auth', 'role:admnistrador']);

/** /Rotas 'Admin' */


/** Rotas 'Landing Page' */

// Rotas 'Cliente'
Route::prefix('/cliente')->name('cliente.')->group(function () {
    Route::get('/cartao', [ClienteController::class, 'index'])->name('cartao')->middleware('auth', 'role:cliente');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/login',[LoginController::class, 'index'])->name('logar');
    Route::get('/login', function() {
        return view('login');
    })->name('login');
});

// Outras
Route::post('/contato', [HomeController::class, 'contato'])->name('contato');
Route::resource("cliente", ClienteController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');

/** /Rotas 'Landing Page' */
