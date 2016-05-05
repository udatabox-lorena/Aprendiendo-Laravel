<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Articulo;

class TestController extends Controller
{
    public function view($id){
    	//dd($id);
    	$articulo = Articulo::find($id);
    	//$articulo->each(function($articulo){
    			$articulo->categoria;
    			$articulo->user;
    			$articulo->tags;
    	//});
    	dd($articulo);
    }
}
