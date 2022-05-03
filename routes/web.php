<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\DependenteController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\UsuarioController;
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

Route::prefix('admin')->name('admin.')->group(function () {

    // Rotas 'Faq'
    Route::resource("faq", FaqController::class);
    Route::prefix('faq')->name('faq.')->group(function () {
        Route::post("ativar",[ClienteController::class, 'ativar'])->name('ativar');
        Route::get("deletar/{faq}", function(Faq $faq) {
            return App::make('App\Http\Controllers\Admin\FaqController')->deletar($faq);
        })->name('deletar');
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
    Route::resource("cliente", ClienteController::class);
    Route::prefix('cliente')->name('cliente.')->group(function () {
        Route::post("ativar",[ClienteController::class, 'ativar'])->name('ativar');
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
    
    Route::post('/login', [LoginController::class, 'index'])->name('logar');
    
    Route::get('/login',  function () {
        return view('admin.login');
    })->name('login');

    Route::get('/home', function () {
        return view('admin.home');
    })->name('home');

});

Route::get('/', function () {
    return view('home');
});
