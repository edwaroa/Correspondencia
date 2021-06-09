<?php

namespace Database\Seeders;

use App\Models\TipoPlanilla;
use Illuminate\Database\Seeder;

class TipoPlanillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoplanilla = TipoPlanilla::create([
            'nombre' => 'Licencia de Crédito'
        ]);
        $tipoplanilla = TipoPlanilla::create([
            'nombre' => 'Franquicia'
        ]);
        $tipoplanilla = TipoPlanilla::create([
            'nombre' => 'Corra'
        ]);
        $tipoplanilla = TipoPlanilla::create([
            'nombre' => 'PostExpress'
        ]);
    }
}
