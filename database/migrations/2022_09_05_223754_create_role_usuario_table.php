<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_usuario', function (Blueprint $table) {
            $table->id();
            // $table->integer('id_role');
            // $table->integer('id_usuario');
            $table->timestamps();
        });

        //Adiciono o relacionamento com a tabela usuarios
        Schema::table('role_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });

        //Adiciono o relacionamento com a tabela roles
        Schema::table('role_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_usuario');
    }
}
