<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendapatan extends CI_Controller {

	function __construct(){
    parent::__construct();
    if ($this->session->userdata('username')==""){
    	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
				<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
				</div>");
			redirect('login');
		} 
		$this->load->model('M_pendapatan');
  }

	public function index(){
		$data['side'] 		='template/side';
		$data['judul'] 		='Pendapatan';
		$data['sub_judul']	='Data Pendapatan';
		$data['content'] 	='pendapatan/v_pendapatan';
		$data['hasil'] 		= $this->M_pendapatan->data_pendapatan();
		$this->load->view('template/isi-halaman', $data);
	}

	public function cek_pendapat(){
		$data_from	= $this->input->post('datepicker_from');
		$data_to	= $this->input->post('datepicker_to');
		$list 		= $this->M_pendapatan->cek_pendapatan($data_from,$data_to);
		$data 		= array();

		$no=1;
		foreach($list as $pn){
			$row = array();
			$row[] = $no++;
			$row[] = $pn->tgl_terima;
			$row[] = $pn->jumlah;
			$row[] = $pn->total;

		$data[]  = $row;
		}

		$output = array(
			"draw" 	=>$_POST['draw'],
			"data" 	=>$data, 
			);

		echo json_encode($output);
	}


}