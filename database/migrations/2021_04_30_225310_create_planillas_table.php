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
            $table->foreignId('id_dependencia')->references('id')->on('dependencias')->nullable();
            $table->foreignId('tipo_planilla')->references('id')->on('tipo_planillas')->nullable();
            $table->string('tipo_envio')->references('id')->on('tipo_envios')->nullable();
            $table->string('tipo_destino')->references('id')->on('tipo_destinos')->nullable();
            $table->string('autoridad_destino');
            $table->text('contenido_destino');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('departamento');
            $table->string('peso');
            $table->string('cantidad');
            $table->string('valor_declarado');
            $table->string('seguro');
            $table->string('valor_total');
            $table->string('usuario_entrega')->references('id')->on('users')->nullable();
            $table->date('fecha_entrega');
            $table->string('usuario_recibe')->references('id')->on('users')->nullable();
            $table->date('fecha_recibe');
            $table->string('recibido');
            $table->string('liquidado');
            $table->string('impreso');
            $table->date('fecha_impreso');
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
