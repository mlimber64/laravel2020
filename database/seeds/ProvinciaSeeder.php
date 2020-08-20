<?php

use Illuminate\Database\Seeder;
use App\Provincia;
class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([
            'nombre' => 'TRUJILLO',
        ]);
        Provincia::create([
            'nombre' => 'Pataz',
        ]);
        Provincia::create([
            'nombre' => 'Lima',
        ]);
        Provincia::create([
            'nombre' => 'Barranca',
        ]);
    }
}
