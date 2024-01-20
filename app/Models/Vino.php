<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bodega;

class Vino extends Model
{
    use HasFactory;
    protected $fillable  = [
        "nombre",
        "descripcion",
        "anyo",
        "alcohol",
        "tipo",
        "bodega_id"
    ];

    public function bodegas()
    {
        return $this->belongsTo(Bodega::class);
    }
}
