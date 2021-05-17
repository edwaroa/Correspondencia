<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planillas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_planilla');
            $table->string('dependencias');
            $table->foreignId('tipo_planilla')->references('id')->on('tipo_planillas')->nullable();
            $table->string('tipo_envio');
            $table->string('tipo_documento');
            $table->string('autoridad_destino');
            $table->string('contenido_destino');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('peso');
            $table->string('cantidad');
            $table->string('valor_declarado');
            $table->string('seguro');
            $table->string('valor_total');
            $table->string('usuario_entrega');
            $table->string('fecha_entrega');
            $table->string('usuario_recibe');
            $table->string('fecha_recibe');
            $table->string('requerido');
            $table->string('nombre');
            $table->string('liquidado');
            $table->string('impreso');
            $table->string('fecha_impreso');
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
        Schema::dropIfExists('planillas');
    }
}
