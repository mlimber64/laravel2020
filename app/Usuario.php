<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;
class Usuario extends Model
{
    public $timestamps = false;

    public function documento()
    {
    return $this->belongsTo(TipoDocumento::class);
    }
}
