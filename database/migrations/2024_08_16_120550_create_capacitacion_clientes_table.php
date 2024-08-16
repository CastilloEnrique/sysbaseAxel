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
        Schema::create('capacitacion_clientes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombres');
            $table->string('Apellidos');
            $table->char('telefono', 8)->nullable();
            $table->string('direccion')->nullable();
            $table->string('cui', 13)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitacion_clientes');
    }
};
