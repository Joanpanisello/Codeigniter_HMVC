<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Say_hello extends CI_Model {

 


    function __construct()
    {
        parent::__construct();
    }


    function hola(){

   	 return "hola";
	
    }

}