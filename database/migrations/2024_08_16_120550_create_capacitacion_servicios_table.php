<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitacion_servicios', function (Blueprint $table) {
            $table->comment('	');
            $table->integer('id', true);
            $table->integer('cliente_id')->index('fk_servicios_clientes_idx');
            $table->unsignedBigInteger('user_id')->index('fk_servicios_usuarios1_idx');
            $table->integer('estado_id')->index('fk_servicios_estados1_idx');
            $table->integer('equipo_id')->index('fk_servicios_equipos1_idx');
            $table->date('fecha_recepcion');
            $table->text('problema');
            $table->date('fecha_diagnostico')->nullable();
            $table->text('diagnostico')->nullable();
            $table->date('fecha_solucion')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitacion_servicios');
    }
};
