<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Open extends CI_Controller {

	
	public function contact()
	{
		$data['body']="front/contact";			
		$this->load->view("template/front/core",$data);
	}
	public function about()
	{
		$data['body']="front/about";			
		$this->load->view("template/front/core",$data);
	}
}
