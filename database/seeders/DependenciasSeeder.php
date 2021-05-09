<?php

namespace Database\Seeders;

use App\Models\Dependencia;
use Illuminate\Database\Seeder;

class DependenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dependencia = Dependencia::create([
            'codigo' => '1',
            'nombre' => 'Sistemas',
            'descripcion' => 'Area encargada del soporte tecnico de la empresa',
            'tipo_dependencia' => 'Dependencia administrativa',
            'usuario_mensaje' => 'No hay mensaje registrado'
        ]);
    }
}
