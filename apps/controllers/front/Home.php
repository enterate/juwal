<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$data['body']="front/home";			
		$this->load->view("template/front/core",$data);		
	}
}
