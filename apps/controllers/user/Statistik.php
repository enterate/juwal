<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data['body']="user/statistik/all";	
		$this->load->view("template/user/core",$data);
	}
}