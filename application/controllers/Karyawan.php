<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
    parent::__construct();
    if ($this->session->userdata('username')==""){
    	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
				<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
				</div>");
			redirect('login');
		} 
		$this->load->model('M_karyawan');
    //$this->load->model('M_karyawan', 'karya'); buat aliansi
  }

  public function index(){
  	$data ['side'] 		  ='template/side';
  	$data ['judul']		  ='Karyawan';
  	$data ['sub_judul'] ='Data Karyawan';
  	$data ['content']	  ='karyawan/v_karyawan';
  	$data ['karyawan']	=$this->M_karyawan->data_karyawan();
  	//print_r($data['Karyawan']);die();
  	$this->load->view('template/isi-halaman', $data);
  }

  public function tambah(){
  	$data_encode = array(
  		'ktp'             =>$this->input->post('ktp'),
  		'nama_karyawan'   =>$this->input->post('nama'),
  		'alamat'		      =>$this->input->post('alamat'),
  		'jenis_kelamin'   =>$this->input->post('kelamin'),
  		);
  	$simpan = $this->M_karyawan->simpan($data_encode);
  	echo json_encode(array("status" => TRUE));
  	
  }

 // public function edit($id) wajib pake $id 
  public function edit($id){
    $data = $this->M_karyawan->edit($id);
    echo json_encode($data);
  }

  public function update(){
    $id = $this->input->post('id_karyawan');
    $data = array(
      'ktp'           =>$this->input->post('ktp'),
      'nama_karyawan' =>$this->input->post('nama'),
      'alamat'        =>$this->input->post('alamat'),
      'jenis_kelamin' =>$this->input->post('kelamin'),
    );

    $this->M_karyawan->update($id, $data);
    echo json_encode(array("status"=>TRUE)); 
  }

  public function hapus($id){
  	//$id = $_POST['id_kategori'];
  	$this->M_karyawan->hapus($id);
  	echo json_encode(array("status" => TRUE));
  	redirect ('Karyawan');
  	
  }

}