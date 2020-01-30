<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){
		if(env("APP_ENV") == "local"){
			return "local";
		}
		if(env("APP_DEBUG")){
			return "debug";
		}
		return "Hola bebex";
	}
}
