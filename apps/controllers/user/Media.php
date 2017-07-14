<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends My_User {

	
	function __construct(){
        parent::__construct(); 
        $this->load->model('Media_model','galeri');
    }	

	public function index()
	{
		$data=$this->information();
		$data['list']=$this->galeri->get_all();
		$data['body']="user/media/all";	
		$this->load->view("template/user/core",$data);
	}
	function add(){
		$data=$this->information();
		$data['body']="user/media/add";	
		$this->load->view("template/user/core",$data);	
	}
	function upload(){
		$path=FCPATH.'/upload/';
        $directory="upload/";
        $owner="C";

		$config['upload_path']   = $path;
        $config['allowed_types'] = '*';
        $config['remove_spaces'] = TRUE;
        $config['encrypt_name'] = TRUE;
		//$config['max_size']      =   '5000';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$finfo=$this->upload->data();     
        	$orig_name=$this->upload->data('orig_name');
        	$nama_file=$this->upload->data('raw_name');
        	$mime=$this->upload->data('file_ext');
        	$this->createThumbnail('upload/',$finfo['file_name'],262,150);
        	$finfo['raw_name']. '_thumb' .$finfo['file_ext'];	
        	if ($this->input('id_course')) {
        		$data = array(
	        		'file_name' => $orig_name, 
	        		'enc_name' => $nama_file, 
	        		'directory' => $directory, 
	        		'token' => $token, 
	        		'mime' => $mime, 
	        		'note' => $this->input('note'),  
	        		'owner' => $owner,
	        		);
	        	$id_gallery=$this->galeri->insert_to($data); // insert media into table gallery media than get the insertid

	        	// $data_course_galeri = array(
	        	// 	'id_course' => $this->input('id_course'), 
	        	// 	'id_galeri_media' => $id_gallery, 
	        	// 	);
	        	// $this->db->insert('course_gallery',$data_course_galeri); // insert data to course gallery
        	}
        	else{
        		$data = array(
	        		'file_name' => $orig_name, 
	        		'enc_name' => $nama_file, 
	        		'directory' => $directory, 
	        		'token' => $token, 
	        		'mime' => $mime, 
	        		'note' => $this->input('note'), 
	        		);
	        	$id_gallery=$this->galeri->insert_to($data);
        	}
        }
	}
	function remove_upload(){
		$token=$this->input->post('token');
		$foto=$this->db->get_where('media',array('token'=>$token));
		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->enc_name."".$hasil->mime;
			$id=$hasil->id;
			if(file_exists($file=FCPATH.'/upload/'.$nama_foto)){
				unlink($file);
				unlink(FCPATH.'/upload/'.$hasil->enc_name.'_thumb'.$hasil->mime);
			}
			$this->db->delete('media',array('token'=>$token));
			$this->galeri_course->delete_by('id_galeri_media',$id);
			$removed="TRUE";
			echo json_encode($removed);
		}
		
	}
	function list_of(){
		if (is_ajax()) {
			$list = $this->galeri->get_datatables();
			$data = array();
			$no = $_GET['start'];
			foreach ($list as $gal) {
				
				$no++;
				$row = array();
				$row[] = $no;
				$link=gallery_base($gal->directory)."/".$gal->enc_name."_thumb".$gal->mime;	
				$link_download=base_url()."admin/gallery/download/".$gal->token;
				$row[] = "<img src='".cek_mime($gal->mime,$link)."' class='img-thumb'>";
				
				$row[] = $gal->file_name;
				$row[] = $gal->note;
				$row[] = $gal->mime;
				
			
				$row[] = "
				<a class='btn btn-xs btn-primary ' href='javascript:void(0)' title='Get Link'><i class='glyphicon glyphicon-upload' download='source' onclick='copyclipboard(".$gal->id.")'></i></a>
				<a class='btn btn-xs btn-success ' href=".$link_download." title='Download'><i class='glyphicon glyphicon-download-alt' download='source'></i></a>
				
				<a class='btn btn-xs btn-danger' href='javascript:void(0)' title='Hapus' onclick='d(".$gal->id.")'><i class='glyphicon glyphicon-trash'></i></a>";

				$data[] = $row;
			}

			$output = array(
				"draw" => $_GET['draw'],
				"recordsTotal" => $this->galeri->count_all(),
				"recordsFiltered" => $this->galeri->count_filtered(),
				"data" => $data,
				);
			echo json_encode($output);
		}
		else{
			echo "Forbidden";
		}
	}
}