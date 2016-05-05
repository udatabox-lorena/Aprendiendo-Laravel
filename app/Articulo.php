<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = "articulos";

    protected $fillable = ['titulo', 'contenido', 'user_id', 'categoria_id'];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function imagens(){
    	return $this->hasMany('App\Imagen');
    }

    public function tags(){
    	return $this->belongsToMany('App\Tag');
    }
}
