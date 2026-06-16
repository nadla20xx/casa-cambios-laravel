<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->text('email');
            $table->text('password');
            $table->dateTime('fecha_hora_registro');
            $table->dateTime('fecha_hora_ultimo_login')->nullable();
            $table->tinyInteger('habilitado')->default(1);
            $table->string("remember_token",100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('usuarios');
    }
};
