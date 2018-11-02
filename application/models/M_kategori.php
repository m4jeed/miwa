<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {
	var $table = 'kategori_barang'; //hilangkan gak ngaruh juga

	function __construct(){
        parent::__construct();
    }

  public function data_kategori(){
  	$data = $this->db->query("SELECT * FROM kategori_barang");
  	return $data->result();
  }

  public function simpan($data_encode){
    $this->db->insert('kategori_barang', $data_encode);
    return $this->db->insert_id();
  }

  public function hapus($id){
  	$this->db->where('id_kategori', $id);
  	$this->db->delete($this->table); //bisa pake $this->table karena tabel udh didefinisikan dia atas
  }

}