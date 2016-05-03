<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    protected $fillable = ['titulo', 'contenido', 'user_id', 'categoria_id'];
}
