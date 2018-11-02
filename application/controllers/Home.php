<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		// if ($this->session->userdata('username')==""){
		// 	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
		// 		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
		// 		<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
		// 		</div>");
		// //redirect(base_url('login')); //sama-sama
		// redirect('login');
		//} 
		//$this->load->model('master/user_model','user');
		// $this->load->model('M_barang');
		// $this->load->model('M_pelanggan');
		// $this->load->model('M_login');
	}

	public function index() {
		// $data['side'] 			='template/side';
		// $data['judul'] 			='Dashboard';
		// $data['sub_judul']	='dashboard';
		// $data['content'] 		='template/content';
		// $data['count_barang'] 	 = $this->M_barang->count_alls();
		// $data['count_pelanggan'] = $this->M_pelanggan->count_all();
		// $data['count_user']			 = $this->M_login->count_all();
		//$this->load->view('template/homepage', $data);
		$data['title'] = 'rizkylaundry';
		$this->load->view('homepage', $data);
	}


}