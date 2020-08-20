<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id_tipo' => 1,
            'nombre' => 'Juan',
            'apellido' => 'Perez Lopez',
            'nro_doc' => 78956231,
            'email' => 'juanperez@gmail.com',
            'fecha_nac' => '08/06/1996',
            'direccion' => 'Av. Larco',
        ]);
    }
}
