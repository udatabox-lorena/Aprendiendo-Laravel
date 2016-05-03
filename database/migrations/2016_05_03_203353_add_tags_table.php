<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        //Relacion de muchos a muchos necesita una tabla relacional llamada pibot
        //Laravel indica que la tabla pibot debe llevar el nombre de manera singular de las dos tablas 
        //que se vallan a relacionar (Es decir el nombre exacto de las dos tablas sin s)
        //Articulos & tags = articulos & tags = articulos_tags

        Schema::create('articulo_tag', function(Blueprint $table){
            $table->increments('id');
            $table->integer('articulo_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            $table->foreign('articulo_id')->references('id')->on('articulos');
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tags');
    }
}
