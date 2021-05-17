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
            'descripcion' => 'Area encargada del soporte tecnico de la empresa'
        ]);
        $dependencia = Dependencia::create([
            'codigo' => '2',
            'nombre' => 'Correspondencia',
            'descripcion' => 'Area encargada de la Correspondencia interna y externa de la empresa'
        ]);
    }
}
