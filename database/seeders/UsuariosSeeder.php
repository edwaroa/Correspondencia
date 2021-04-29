<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre' => 'Super Admin',
            'descripcion'=>'Mayor nivel de privilegios'
        ]);

        Rol::create([
            'nombre' => 'Administrativo',
            'descripcion'=>'Nivel de privilegios medio'
        ]);

        Rol::create([
            'nombre' => 'Empleado',
            'descripcion'=>'Bajo nivel de privilegios'
        ]);

        $user = User::create([
            'tipo_documento' => 'Cedula de Ciudadanía',
            'documento' => '1098811453',
            'nombre' => 'Edwar',
            'apellido' => 'Roa',
            'rol_id' => 1,
            'email' => 'edwaroa10@gmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
}