<?php
namespace controllers;
 /**
 * Controller InscriptionController
 **/
 class InscriptionController extends ControllerBase{

	/**
	*
	* @get("_default","name"=>"Home")
	*/
	public function index(){
		$this->loadView("InscriptionController/index.html");
	}

	/**
	 *@route("inscription")
	**/
	public function bouton(){
		
		$this->loadView('InscriptionController/bouton.html');

	}


	/**
	 *@route("do/inscription")
	**/
	public function post(){
		
	}

}
