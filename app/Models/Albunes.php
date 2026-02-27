<?php

namespace App\Models;

use App\models\Genero;
use Illuminate\Database\Eloquent\Model;

class Albunes extends Model
{
    protected $fillable = ['nombre_album', 'año_lanzamiento', 'discografia', 'genero_id'];
    public function genero () {
        return $this-> beLongsTo (Genero::class);
    }
}
