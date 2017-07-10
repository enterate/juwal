<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function index()
	{
		$data['list']=$this->Kategori_model->get_all();
		$data['body']="user/kategori/all";	
		$this->load->view("template/user/core",$data);
	}
	function add(){
		if ($this->input->post('btn-save')) {
			$this->Kategori_model->insert_normal();
			redirect('user/kategori');
		}
		else{
			$data['body']="user/kategori/add";	
			$this->load->view("template/user/core",$data);	
		}
	}
}