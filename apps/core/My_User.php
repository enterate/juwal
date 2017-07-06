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
          
    }
    
    
}
