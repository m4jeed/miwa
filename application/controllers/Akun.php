<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	function __construct(){
    parent::__construct();
	    if ($this->session->userdata('username')==""){
	    	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
					<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
					</div>");
				redirect('login');
			} 
	    $this->load->model('M_akun');
  	}

	public function index(){
		$data['side'] 			='template/side';
		$data['judul'] 			='DAFTAR AKSES AKUN MIWA';
		$data['sub_judul']		='Data Akun Miwa';
		$data['content'] 		='akun/v_akun';
		$data['akun'] 			= $this->M_akun->data_akun();
		//print_r($data['akun']);die;
		$this->load->view('template/isi-halaman', $data);
	}

	public function tambah(){
	  	$data_encode = array(
	  		'nama'                =>$this->input->post('nama'),
	  		'email'   	          =>$this->input->post('email'),
	  		'username'		      =>$this->input->post('username'),
	  		'password'		      =>md5($this->input->post('pass')),
	  		'level'   			  =>$this->input->post('level'),
	  		);
	  	$simpan = $this->M_akun->simpan($data_encode);
	  	echo json_encode(array("status" => TRUE));
  	}

  	public function edit($id){
    $data = $this->M_akun->edit($id);
    echo json_encode($data);
  }

  	public function update(){
	    $id = $this->input->post('uid');
	    $data = array(
	      'nama'           =>$this->input->post('nama'),
	      'email' 		   =>$this->input->post('email'),
	      'username'       =>$this->input->post('username'),
	      'password'       =>md5($this->input->post('pass')),
	      'level'          =>$this->input->post('level'),
	    );

	    $this->M_akun->update($id, $data);
	    echo json_encode(array("status"=>TRUE)); 
	}
}