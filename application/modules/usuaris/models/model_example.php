<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Model_example extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    function hello()
    {
    	return "HelloWorld, CodeIgniter it's amazing!";
	}
}
