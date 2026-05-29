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
        Schema::create('tipos_cambios', function (Blueprint $table) {
            $table->increments('id_tipo_cambio');
            $table->integer('id_moneda');
            $table->decimal('valor', 14, 4);
            $table->date('fecha_cambio');
            $table->dateTime('fecha_hora_registro');
            $table->dateTime('fecha_hora_modificacion')->nullable();
            $table->tinyInteger('habilitado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tipos_cambios');
    }
};
