<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Channel extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data=$this->information();
		$data['body']="user/channel/all";	
		$this->load->view("template/user/core",$data);
	}
}