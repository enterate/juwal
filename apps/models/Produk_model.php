<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Produk_model extends Model_Main{    

    protected function get_table_name() {
        return 'produk';
    }
    protected function primary() {
        return 'id_produk';
    }
    public function get_all_field() {
      
        $fields = array(                        
              'id_produk' => has(26),               
              'judul' => $this->input->post('judul'),
              'id_kategori' => $this->input->post('id_kategori'),
              'deskripsi' => $this->input->post('deskripsi'),
              'perawatan' => $this->input->post('perawatan'),
              'bahan' => $this->input->post('bahan'),
              'berat' => $this->input->post('berat'),
              'stok' => $this->input->post('stok'),
              'phone' => $this->input->post('phone'),
              'harga' => $this->input->post('harga'),
              'createdat' => timestamp(),
              'updateat' => "",                            
                      
        );
        return $fields;
    } 

}
