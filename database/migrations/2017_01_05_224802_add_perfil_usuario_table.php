<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerfilUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['albergue', 'personal']);
            $table->string('descripcion');
            $table->string('web');
            $table->string('tel_casa');
            $table->string('tel_cel');
            $table->string('direccion');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('requisitos');
            $table->string('info_solicitada');
            $table->string('email_contacto');
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
        Schema::dropIfExists('perfil_usuario');
    }
}
