<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

		function __construct(){
	    parent::__construct();
		    if ($this->session->userdata('username')==""){
		    	$this->session->set_flashdata("msg", "<div class='alert alert-info alert-dismissible' role='alert'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>		
						<span class='glyphicon glyphicon-remove-sign'></span> Ops.. Silahkan login terlebih dahulu!!
						</div>");
					redirect('login');
				} 
		    $this->load->model('M_barang');
	  	}

		public function index(){
			$data['side'] 			='template/side';
			$data['judul'] 			='PRODUK MIWA';
			$data['sub_judul']		='Data Produk Miwa';
			$data['content'] 		='barang/v_barang';
			$data['barang'] 		= $this->M_barang->data_barang();
			//print_r($data);die();
			$this->load->view('template/isi-halaman', $data);
		}

		// public function get_detail($id_barang){
		// 	$data = $this->M_barang->detail();
		// 	json_encode($data);
		// 	echo json_encode($this->db->last_query());
		// }

		public function valid_ajax(){
			$this->load->model('M_barang');
			$kode  = $this->input->post('kode');
			$query = $this->M_barang->getkode($kode);
			if ($query->num_rows() > 0 ){
				echo 'maaf data udah ada';
			}else{
				echo 'data tidak ditemukan';
			}
		}

		public function tambah_barang(){
			$data['side']		='template/side';
			$data['judul'] 		='Barang';
			$data['sub_judul']	='Form Barang';
			$data['content'] 	='barang/form_barang';
			$data['kat_brg']    = $this->M_barang->kategori();
			$this->load->view('template/isi-halaman', $data);
		}

		public function simpan(){
			$data['side']		='template/side';
			$data['judul'] 		='Barang';
			$data['sub_judul']	='Form Barang';
			$data['content'] 	='barang/form_barang';
			$data['kat_brg']    = $this->M_barang->kategori();
			// print_r($data['kat_brg']);die();
			$data['barang'] 	= $this->M_barang->data_barang();

			$config['upload_path'] 		="./uploads/"; 
			$config['allowed_types']	='gif|jpg|png|jpeg|txt|pdf|doc|docx';
			$config['overwrite'] 		='TRUE';
			$config['max_size'] 		='0';
			$config['max_width'] 		='0';
			$config['max_heignt'] 		='0';
			$this->load->library('upload', $config);
			$this->upload->do_upload('foto_barang');
			$image_name = $this->upload->data();
			$foto_barang = $image_name['file_name'];
			
			/*kode tidak bisa duplikat*/
			$this->form_validation->set_rules('kode', 'Kode barang', 'required', 'callback_kodeBarang');
			$this->form_validation->set_rules(
				'kode', 'Kode barang',
		        'required|min_length[3]|max_length[10]|is_unique[barang.kode_barang]',
		        array(
		                'required'      => 'You have not provided %s.',
		                'is_unique'     => 'Maaf %s sudah terdaftar.'
		        )	
		    );

		    /*nama barang tidak bisa duplikat*/
			$this->form_validation->set_rules('nama_barang', 'Nama barang', 'required', 'callback_namaBarang');
			$this->form_validation->set_rules(
				'nama_barang', 'Nama barang',
		        'required|min_length[5]|max_length[100]|is_unique[barang.nama_barang]',
		        array(
		                'required'      => 'You have not provided %s.',
		                'is_unique'     => 'Maaf %s sudah terdaftar.'
		        )
			);
			//$this->form_validation->set_rules('foto_barang', 'Foto barang', 'required');
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('harga', 'Harga barang', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

			if($this->form_validation->run() == false){
			   $this->load->view('template/isi-halaman', $data);
			}else{
			
			$data_array=array(
				'kode_barang'=>$this->input->post('kode'),
				'nama_barang'=>$this->input->post('nama_barang'),
				'id_kategori'=>$this->input->post('kategori'),
				'harga'=>$this->input->post('harga'),
				'foto_barang'=>$foto_barang,
				);
			$this->M_barang->simpan($data_array);
			redirect('Barang');
			
			}

		}

		/*fungsi buat data tdk bisa duplikat*/
		public function kodeBarang($cek_code){
			if ($this->M_barang->check_code($cek_code)==''){
			      return true;
			    }else{
			      $this->form_validation->set_message();
			      return false;		
			    }	
		}

		/*fungsi buat data tdk bisa duplikat*/
		public function namaBarang($cek_barang){
		    if ($this->M_barang->check_barang($cek_barang)==''){
		      return true;
		    }else{
		      $this->form_validation->set_message();
		      //$this->form_validation->set_message('nama_barang', 'Nama barang '. $cek_barang .' telah terdaftar');
		      return false;		
		    }
		}

		public function edit(){
			$id=$this->input->get('id_barang');
			$data['side'] 			='template/side';
			$data['judul'] 			='Edit Miwa';
			$data['sub_judul']		='Form Edit Miwa';
			$data['content'] 		='barang/form_edit';
			$data['barang'] 		= $this->M_barang->edit_barang($id);
			$data['kat_brg']    	= $this->M_barang->kategori();
			//print_r($data['kat_brg']);//die();
			$this->load->view('template/isi-halaman', $data);

		}

		public function update($id){
			$id	           = $this->input->post('id_barang');
			$kode          = $this->input->post('kode');
			$nama_barang 	 = $this->input->post('nama_barang');
			$nama_kategori = $this->input->post('nama_kategori');
			$harga 	       = $this->input->post('harga');

			$data = array(
				'id_barang'	  =>$id,
				'kode_barang' =>$kode,
				'nama_barang' =>$nama_barang,
				'id_kategori' =>$nama_kategori,
				'harga' 	  =>$harga
				);
			//print_r($data);die();
			$this->M_barang->update_barang($id, $data);
			redirect('Barang');
		}

		public function delete($id){
			//die();
			$where = array('id_barang'=>$id);	
			$data['barang'] 	= $this->M_barang->delete_barang($where, 'barang');
			redirect ('Barang');
			$this->load->view('template/isi-halaman', $data);
		}

}