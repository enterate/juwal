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
	function add(){
		if ($this->input->post('btn-save')) {
			$this->Produk_model->insert_normal();
			redirect('user/produk');
		}
		else{
			$data['list_kategori']=$this->Kategori_model->get_all();
			$data['body']="user/produk/add";	
			$this->load->view("template/user/core",$data);	
		}
	}
}