<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(TipoEnvioSeeder::class);
        $this->call(TipoPlanillaSeeder::class);
        $this->call(TipoDestinoSeeder::class);
        $this->call(DependenciasSeeder::class);
        $this->call(UsuariosSeeder::class);
        $this->call(PlanillaSeeder::class);
    }
}
