<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $fillable = [
        'nombre', 'descripcion',
    ];
}
