<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';

    protected $fillable = ['titulo', 'contenido', 'user_id', 'categoria_id'];

    public function categoria(){
    	return $this->belongsTo('Categoria', 'categoria_id');
    }

    public function user(){
    	return $this->belongsTo('App/User', 'id');
    }

    public function image(){
    	return $this->hasMany('App/Image');
    }

    public function tags(){
    	return $this->belongsToMany('App/Tag');
    }
}
