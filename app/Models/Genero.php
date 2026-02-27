<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = ['nombre'];
    public function albunes () {
        return $this-> hasMany (Albunes::class);
    }
}
