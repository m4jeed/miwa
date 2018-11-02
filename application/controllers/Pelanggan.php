<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct(){
    parent::__construct();
    if ($this->session->userdata('username')==""){
    	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
				<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
				</div>");
			redirect('login');
		} 
		$this->load->model('M_pelanggan');
  }

	public function index()
	{
		$data['side'] 		='template/side';
		$data['judul'] 		='Pelanggan';
		$data['sub_judul']	='Data Pelanggan';
		$data['content'] 	='pelanggan/v_pelanggan';
		$data['pelanggan'] 	= $this->M_pelanggan->data_pelanggan();
		$this->load->view('template/isi-halaman', $data);
	}

	
	public function search(){
		/*$data['side'] 			='template/side';*/ //di kasih ini maka tidak tampil js nya
		$keyword = $this->uri->segment(3); //tadinya 0 atau 3 sama saja
		$data = $this->db->from('barang')->like('nama_barang',$keyword)->get();	
		foreach($data->result() as $row){
		$arr['query'] = $keyword;
		$arr['suggestions'][] = array(
				'value'			=>$row->nama_barang, //buat nampilin autocompletenya, ambil data dr fieldnya
				'order_barang'	=>$row->nama_barang, //buat ambil dari field nama_barang trus disimpane ke order_barang
				//'status'			=>$row->status,
				'harga'			=>$row->harga
			);
		}
		echo json_encode($arr);
		//echo json_encode($this->db->last_query()); //buat var_dump
	}

	
	public function tambah_pelanggan(){
		$this->load->model('M_kategori');

		$data['side'] 			='template/side';
		$data['judul'] 			='Pelanggan';
		$data['sub_judul']	    ='Form Pelanggan';
		$data['content'] 		='pelanggan/form_pelanggan';
		$data['data_select']    = $this->M_kategori->data_kategori();
		//print_r($data['data_select']);die();
		$this->load->view('template/isi-halaman', $data);
	}

	public function simpan(){
	
		// $id = "select nama_barang from barang";
		// //return $this->db->query($id2);
		// $result = $this->db->query($id)->result();
		// //var_dump($result);die();

		// $a ="SELECT SUM(jml_barang-status) AS 'E' FROM barang where id_barang=".$id;
		// $result = $this->db->query($a)->row();
		// var_dump($result);die();

		$this->load->model('M_pelanggan');
		$data['side'] 			='template/side';
		$data['judul'] 			='Pelanggan';
		$data['sub_judul']	    ='Form Data Pelanggan';
		$data['content'] 		='pelanggan/form_pelanggan';
		//$data['stat']			= $this->M_pelanggan->data_status();	
		// print_r($data['stat']);
		// die();	
		$this->form_validation->set_rules('pelanggan','Pelanggan','required');
		$this->form_validation->set_rules('alamat', 'Alamat Pelanggan', 'required');
		$this->form_validation->set_rules('order_barang','Nama Barang','required');
		$this->form_validation->set_rules('jml_qty', 'Jumlah Barang', 'required');
		$this->form_validation->set_rules('tgl_terima', 'Tanggal Pesan Barang', 'required');
		$this->form_validation->set_rules('tgl_keluar', 'Tanggal Kirim Barang', 'required');
		$this->form_validation->set_rules('status', 'Konfirmasi', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

		if($this->form_validation->run() == false){
			   $this->load->view('template/isi-halaman', $data);
		}else{
			

			$param = array(
		    'pelanggan'   	=>$this->input->post('pelanggan'),
		    'alamat'        =>$this->input->post('alamat'),
		    'order_barang' 	=>$this->input->post('order_barang'),
		    'jml_qty'		=>$this->input->post('jml_qty'),
		    'tgl_terima'    =>$this->input->post('tgl_terima'),
		    'tgl_keluar'    =>$this->input->post('tgl_keluar'),
		    'harga'    		=>$this->input->post('harga'),
		    'harga_total' 	=>$this->input->post('harga_total'),
		    'status'		=>$this->input->post('status')
		    //'id_barang'		=>$this->input->post('id_barang')
	    );
		$this->M_pelanggan->simpan_data($param);
		redirect('Pelanggan');
	    }
		
	}

	public function hapus($id){
	$where = array('id_pelanggan'=>$id);	
	$data['pelanggan'] 	= $this->M_pelanggan->hapus($where, 'pelanggan');
	//$data['pelanggan'] = $this->M_pelanggan->hapus($where, 'pelanggan');
	redirect ('Pelanggan');
	$this->load->view('template/isi-halaman', $data);

	}

}