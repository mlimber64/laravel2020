<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class TipoDocumento extends Model
{
    public $timestamps = false;
    
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
