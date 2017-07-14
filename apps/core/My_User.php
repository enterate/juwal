<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class My_User extends CI_Controller{
    public $size=0;    
    public $get_lang="";
    public $max_height="5000";
    public $max_width="5000";
    public $max_size="5000";
    public $path="./upload/";
    public $id_user="";    
    public $thumb_path="uploads";
    protected $countingsession;
    protected $ip;

    function __construct(){
        parent::__construct();
        
        $this->load->helper('cookie');
        if ($this->session->userdata('__usr_jwl')==FALSE) {            
            $this->session->sess_destroy(); 
            redirect('front/login');
        }
          
    }

    function information(){
        $sesi=$this->session->userdata('__usr_jwl');
        $this->id_user=$this->User_model->specific_column('id_user','email',$sesi);
        $data = array(
            'name'=> $this->User_model->specific_column('nama','id_user',$this->id_user),
            );

        return $data;
    }
    
    
}
