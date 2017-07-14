<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//open dashboard admin
//routing action

class Dashboard extends My_User {

	
	function __construct(){
        parent::__construct(); 
  //       $this->load->model('cms/Cms_page_category_model','cms_page');       
		// $this->load->model('cms/Cms_post_model','cms_post');
		// $this->load->model('Course_model','course');
  //      	$this->load->model('Silabus_model','silabus');
    }	

	public function index()
	{
		$data=$this->information();
		$data['body']="user/dashboard";	
		$this->load->view("template/user/core",$data);
	}
	function setting(){
		$data=$this->information();
		$this->load->model('User_model','usr');
		//$data['email']=$this->usr->specific_column('email','role','10');
		if ($this->input('change')) {
        	$get_pass=$this->usr->specific_column('password','role','10'); // change your column
        	if ($this->modul_password_auth($get_pass)) {
        		if ($this->modul_password_proceed('email',$user_now,'user')) {
        			$this->session->set_flashdata('sukses', "Ganti password berhasil.");
        		}
        		else{
        			$this->session->set_flashdata('gagal', "Password tidak sama.");
        		}
        	}
        	else{
        		$this->session->set_flashdata('gagal', "Passowrd salah.");
        	}
        	redirect('admin/dashboard/setting');
		}
		elseif($this->input('change-user')){
			$token=has(55);
			$data_ = array('email' => $this->input('email'),'is_valid'=>'0','token_forgot_pass'=>$token);
			$up=$this->usr->update_field('role',10,$data_);
			$send=$this->sendmailnored("Mailist Superadmin Arkademy ","Email administrator telah diganti",$this->input('email'),"Silahkan melakukan verifikasi perubahan email 
				<a href='".base_url()."validasi/".$token."'>disini</a>.");
			if ($send) {
				if ($up) {
					$this->session->set_flashdata('sukses', "Email administrator diganti berhasil.");
				}
				else{
					$this->session->set_flashdata('gagal', "Email gagal diganti.");
				}
			}
			else{
				$this->session->set_flashdata('gagal', "Email gagal diganti, masukka email dengan benar.");
			}
			
			redirect('admin/dashboard/setting');
		}
		else{
			$data['body']="back/setting";	
			$this->load->view(admin(),$data);
		}
	}
}
