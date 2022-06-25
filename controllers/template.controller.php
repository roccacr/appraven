<?php

class TemplateController{
    public function index(){

		include "views/template.php";
    }	

    	/* Un método estático que devuelve una cadena. */
	static public function path(){

		return "http://fe.com/"; 

	}
}
