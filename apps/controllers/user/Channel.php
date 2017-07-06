<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//open dashboard admin
//routing action

class Channel extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data['body']="user/channel/all";	
		$this->load->view("template/user/core",$data);
	}
}