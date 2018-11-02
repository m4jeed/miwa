<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendapatan extends CI_Model {

  //var $tabel = 'barang';
	function __construct(){
    parent::__construct();
    $this->load->model('M_pendapatan');
  }

  public function data_pendapatan(){
  	$data = $this->db->query("SELECT tgl_terima,count(id_pelanggan) as jumlah, SUM(harga_total) as total 
  				  FROM pelanggan where date(tgl_terima)=DATE_FORMAT (NOW(),'%Y-%m-%d');"); //SELECT tgl_daftar,count(id) as jumlah FROM tbl_member where date(tgl_daftar)=DATE_FORMAT (NOW(),'%Y-%m-%d');
    return $data->result();
  }

  public function cek_pendapatan($date_from,$date_to){
  	$data = $this->db->query("SELECT tgl_terima,COUNT(id_pelanggan) as jumlah 
						FROM pelanggan WHERE tgl_terima BETWEEN '$date_from' and '$date_to'
						GROUP BY tgl_terima"); 
		//var_dump($data);exit();
    return $data->result(); 

  }

}