<?php

namespace Database\Seeders;

use App\Models\TipoEnvio;
use Illuminate\Database\Seeder;

class TipoEnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoplanilla = TipoEnvio::create([
            'nombre' => 'Documento'
        ]);
        $tipoplanilla = TipoEnvio::create([
            'nombre' => 'Paquete'
        ]);
    }
}
