<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori_model extends Model_Main{    

    protected function get_table_name() {
        return 'kategori';
    }
    protected function primary() {
        return 'id_kategori';
    }
    public function get_all_field() {
      
        $fields = array(                        
              'nama_kategori' => $this->input->post('nama_kategori'),               
              'created_at' => timestamp(),                            
                      
        );
        return $fields;
    } 

}
