<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data['body']="user/produk/all";	
		$this->load->view("template/user/core",$data);
	}
}