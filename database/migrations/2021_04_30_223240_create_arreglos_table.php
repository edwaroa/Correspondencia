<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArreglosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arreglos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('autosol');
            $table->string('numero_oficio');
            $table->string('numero_certificado_correspondencia');
            $table->string('fecha_oficio');
            $table->string('ciudad_remitente');
            $table->string('detalle');
            $table->string('inicial');
            $table->string('usuario');
            $table->string('ciudad_destino');
            $table->string('fecha_radicado');
            $table->string('hora_radicado');
            $table->string('fecha_recibe');
            $table->string('hora_recibe');
            $table->string('muestra');
            $table->string('tipo_muestra');
            $table->string('detalle_ingreso');
            $table->string('impreso');
            $table->string('usuario_red');
            $table->string('usuario_recibe');
            $table->string('rec_en');
            $table->string('recibido');
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
        Schema::dropIfExists('arreglos');
    }
}
