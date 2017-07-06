<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends My_Controller {
	
	function __construct(){
		parent::__construct();
		// $this->load->model('School_model','school');
		$this->load->model('User_model','user');
		// $this->load->model('cms/Cms_menu_model','menu');
	}

	public function index()
	{
		
		// $this->track();
		// $data=$this->information();				
		// $this->get_redirect_cookies();
		if ($this->input->post('login')) {
			$session_id=has(28);
			//$session_data=$this->sesi->get_all_field();
			$session_data['id']=$session_id;
			$username=$this->input('uname');
			$password=$this->input('upassw');
			$remember=$this->input('remember');
			if (count_sesi()) {
				if (is_empty_session()) {
					if($this->user->check_login()){
						$this->session->set_userdata('isLogin',TRUE);
						$this->session->set_flashdata('sukses', "Selamat Datang.");						
						//$this->session->set_userdata('__sch_id', $this->school->specific_column('id_school','email',$this->input->post('uname')));

						$role=$this->user->specific_column('role','email',$this->input->post('uname'));
						$this->session->set_userdata('session_id',$session_id);	
						$id=$this->user->specific_column('id_user','email',$username);
						$this->user->update($id,array('last_login' => date('Y-m-d H:i:s') ));
						$session_data['id_user']=$id;
						$session_data['browser']=$this->getBrowser();
						if ($role==='0') {									
							$this->session->set_userdata('__usr_teacher_', $this->input->post('uname'));
							//$this->session->set_userdata('__id_school_', $this->user->specific_column('id_school','email',$this->input->post('uname')));

							$this->sesi->insert_to($session_data);									
							start_cokkies($username,$password,$role);
							
							redirect('user/dashboard');				
						}
						
						else{
							$this->session->set_flashdata('gagal', "Login failed.");
							redirect('front/loging');
						}

					}
					else{
						$this->session->set_flashdata('gagal', "Login failed.");
						redirect('front/loginr');
					}
				}else{
					$this->session->sess_destroy();                 
					redir("Anda sudah login. Proses logout...","front/login");
				}
			}
			else{
				$this->session->set_flashdata('gagal', "Anda sudah login di browser lain. <a href='".base_url()."logout'>Logout</a>");
				redirect('front/loginh');
			}
		}
		else{
			$data['body']="front/login";
			//$data['parent_menu'] = $this->menu->get_parent_menu('up',1);			

			$this->load->view("template/front/core",$data);	
		}
	}

	// 
	function register(){
		if ($this->input->post('daftar')) {
			$data = array(
				'id_user' => rands(), 
				'email' => $this->input('email'), 
				'role' => '0', 
				'phone' => $this->input('hp'), 
				'password' => generateHash($this->input->post('password')), 
				);
			$this->user->insert_to($data);
			echo "Sukses";
		}
		else{
			$data['body']="front/register";
			$this->load->view("template/front/core",$data);
		}
	}
	/*
	* open forgot password form
	*/
	public function forgot()
	{
		$data=$this->information();		
		if ($this->input->post('btn-forgot')) {
			$title="Arkademy.com | Permintaan reset password";
			$subject="Permintaan reset password";
			$to=$this->input('uname');
			

			$is_exist=$this->user->isExist('email',$to);
			if ($is_exist=='0') {				
				$this->session->set_flashdata('gagal', "Email tidak terdaftar.");
				redirect('forgot');
			}
			else{
				$token=has(50);
				$this->user->update_all('email',$to,array('token_forgot_pass' => $token));
				$msg="Permintaan reset password, silahkan ikuti <a href='".base_url()."verify/".$token."'>link</a> berikut ini.";
				$this->sendmailnored($title,$subject,$to,$msg);
				$this->session->set_flashdata('sukses', "Please check your inbox.");
				redirect('forgot');
			}

		}
		else{
			$data['parent_menu'] = $this->menu->get_parent_menu('up',1);	
			$data['body']="front/forgot";			
			$this->load->view("template/front/core",$data);	
		}
	}
	function verify(){

	}
	function logout(){
		$this->session->sess_destroy(); 
		$this->sesi->delete_by('ip_address',$this->ip); 		
		destroy_cookies();	
		if ($this->session->userdata('arch')==TRUE) {
			redirect('arkmin');
		}
		else{
			redirect('front/login');
		}
		
		
	}


}

