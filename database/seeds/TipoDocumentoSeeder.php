<?php

use Illuminate\Database\Seeder;
use App\TipoDocumento;
class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDocumento::create([
            'nombre' => 'DNI',
        ]);
        
        TipoDocumento::create([
            'nombre' => 'Carne Extranjeria',
        ]);
    }
}
