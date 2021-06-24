<?php

namespace Database\Seeders;

use App\Models\Planilla;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class PlanillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $planilla = Planilla::create([
            'numero_planilla'=>'1',
            'id_dependencia'=>'1',
            'tipo_envio'=>'1',
            'tipo_planilla'=>'1',
            'tipo_destino'=>'1',
            'autoridad_destino'=>'Bienestar',
            'contenido_destino'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book',
            'direccion' => 'Calle 2 # 2 - 22',
            'ciudad' => 'Bucaramanga',
            'departamento' => 'Santander',
            'peso' => '20',
            'cantidad' => '1',
            'valor_declarado' => '5200',
            'seguro' => '50',
            'valor_total' => '5200',
            'usuario_entrega' => '1',
            'fecha_entrega' => Carbon::now(),
            'usuario_recibe' => '2',
            'fecha_recibe' => Carbon::now(),
            'recibido'=>'Si',
            'liquidado' =>'Si',
            'impreso'=>'Si',
            'fecha_impreso'=>Carbon::now()
        ]);
    }
}
