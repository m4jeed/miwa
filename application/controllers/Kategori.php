<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
    parent::__construct();
    if ($this->session->userdata('username')==""){
      $this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>    
        <span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
        </div>");
    redirect('login');
    }

    $this->load->model('M_kategori'); 
  }

  public function index(){
  	$data['side'] 			='template/side';
		$data['judul'] 			='Kategori';
		$data['sub_judul']	='Kategori Barang';
		$data['content'] 		='kategori/v_kategori';
		$data['kate_barang']= $this->M_kategori->data_kategori();
		//$data['link'] 			= "kategori/hapus";
		//$data['kat_brg']    = $this->M_barang->kategori();
		$this->load->view('template/isi-halaman', $data);

  }

  public function tambah_data(){
  	$data_encode = array(
  		'nama_kategori' =>$this->input->post('nama'),
  		);
  	$simpan = $this->M_kategori->simpan($data_encode);
  	echo json_encode(array("status"=>TRUE));
  }

  public function hapus($id){
  	//$id = $_POST['id_kategori'];
  	$this->M_kategori->hapus($id);
  	echo json_encode(array("status" => TRUE));
  	redirect ('Kategori');
  	
  }

}