<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data['body']="user/order/all";	
		$this->load->view("template/user/core",$data);
	}
}