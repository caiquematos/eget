<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\DependenteController;

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

    Route::resource("dependente", DependenteController::class);
    Route::resource("cliente", ClienteController::class);
    
    Route::post('/login', [LoginController::class, 'index'])->name('logar');
    
    Route::get('/login',  function () {
        return view('admin.login');
    })->name('login');

    Route::get('/home', function () {
        return view('admin.home');
    })->name('home');

});

Route::get('/', function () {
    return view('welcome');
});
