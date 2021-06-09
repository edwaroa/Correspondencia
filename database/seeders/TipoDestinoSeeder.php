<?php

namespace Database\Seeders;

use App\Models\TipoDestino;
use Illuminate\Database\Seeder;

class TipoDestinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoplanilla = TipoDestino::create([
            'nombre' => 'Nacional'
        ]);
        $tipoplanilla = TipoDestino::create([
            'nombre' => 'Urbano'
        ]);
    }
}
