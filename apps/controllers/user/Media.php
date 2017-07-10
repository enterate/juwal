<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data['body']="user/media/all";	
		$this->load->view("template/user/core",$data);
	}
}