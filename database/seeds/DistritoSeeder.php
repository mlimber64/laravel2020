<?php

use Illuminate\Database\Seeder;
use App\Distrito;
class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distrito::create([
            'nombre' => 'TRUJILLO',
        ]);
        Distrito::create([
            'nombre' => 'LA ESPERANZA',
        ]);
        Distrito::create([
            'nombre' => 'TRUJILLO',
        ]);
        Distrito::create([
            'nombre' => 'VICTOR LARCO',
        ]);
        Distrito::create([
            'nombre' => 'PATAZ',
        ]);
        Distrito::create([
            'nombre' => 'PARCOY',
        ]);
        Distrito::create([
            'nombre' => 'PIAS',
        ]);
        Distrito::create([
            'nombre' => 'MIRAFLORES',
        ]);
        Distrito::create([
            'nombre' => 'SAN ISIDRO',
        ]);
        Distrito::create([
            'nombre' => 'SURQUILLO',
        ]);
        Distrito::create([
            'nombre' => 'BARRANCA',
        ]);
        Distrito::create([
            'nombre' => 'PARAMONGA',
        ]);
        Distrito::create([
            'nombre' => 'PATIVILCA',
        ]);
    }
}
