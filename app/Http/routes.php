<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('prueba', function(){
	return "Hola desde routes.php";
});*/

Route::get('/', function () {
    return view('test.index');
});


//-----Tutorial Codigo Facilito Laravel5
/*Route::get('articulos/{nombre?}', function($nombre = 'No coloco nombre'){
	echo "El nombre que has colocado es: " . $nombre;
});

Route::get('articulos', [
	'as' => 'articulos',
	'uses' => 'UserController@index'
	]);

Route::group(['prefix' => 'articulos'], function(){

	Route::get('view/{articulo?}', function($articulo = "Vacio"){
		echo $articulo;
	});
});*/
//---------------------------------------

Route::group(['prefix' => 'articulos'], function(){

	Route::get('view/{id}', [
		'uses' => 'TestController@view',
		'as' => 'articulosView'
		]);
});