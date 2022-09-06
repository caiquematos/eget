<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('usuario_id')->nullable();
            $table->string('nome', 255);
            $table->string('email', 80)->unique()->nullable();
            $table->string('senha', 100)->nullable();
            $table->string('cpf', 11)->unique();
            $table->string('categoria', 40)->nullable();
            $table->string('celular', 11)->nullable();
            $table->string('telefone', 10)->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 50)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('complemento')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('ativo')->default(1);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
