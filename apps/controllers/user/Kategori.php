<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data['body']="user/kategori/all";	
		$this->load->view("template/user/core",$data);
	}
	function add(){
		$data['body']="user/kategori/add";	
		$this->load->view("template/user/core",$data);	
	}
}