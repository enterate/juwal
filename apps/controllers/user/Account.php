<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends My_User {

	
	function __construct(){
        parent::__construct(); 
    }	

	public function logout()
	{
		$this->session->sess_destroy(); 
		// $sess_id=$this->session->userdata('session_id');
		// $this->sesi->backup_session($sess_id);
		// $this->sesi->delete_by('ip_address',$this->ip); 		
		// destroy_cookies();	
		// if ($this->session->userdata('arch')==TRUE) {
		// 	redirect('arkmin');
		// }
		// else{
			redirect('front/login');
		//}
	}
	function profil(){
		$data=$this->information();
		$data['body']="user/akun/profil";	
		$this->load->view("template/user/core",$data);
	}
	function password(){
		$data=$this->information();
		$data['body']="user/akun/password";	
		$this->load->view("template/user/core",$data);
	}
}