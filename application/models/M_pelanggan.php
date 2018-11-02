<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

  var $tabel = 'barang';
	function __construct(){
    parent::__construct();
    $this->load->model('M_pelanggan');
  }

  public function count_all(){
    return $this->db->count_all_results('pelanggan');
  }

	public function data_pelanggan(){
    	$data=$this->db->query("SELECT DATE_FORMAT(tgl_terima,'%d-%m-%Y') as tgl_terima,pelanggan,alamat,order_barang,jml_qty,harga,harga_total,status,id_pelanggan FROM pelanggan"); //select DATE_FORMAT(tgl,'%d-%m-%Y') from tbl1
        return $data->result();
  }

  public function get_jumlah(){
    $this->db->from($this->tabel);
    $query = $this->db->get();
    //cek apakah ada data
    if ($query->num_rows() > 0) { //jika ada maka jalankan
        return $query->result();
    }
  }

  public function dataSeleksi(){
    $query= $this->db->query("SELECT * FROM 'barang' where nama_barang ");
    return $this->db->query($query);
  }

  public function seleksi($ambil){
    $data = $this->db->query("SELECT * FROM `barang` WHERE id_kategori=2");
    return $data->result($ambil);

  }

   public function data_status(){
      // $sql = "SELECT status=0 from barang as ak, pelanggan as au where ak.id_barang=au.id_barang";
      // return $this->db->query($sql);
      $data ="SELECT a.nama_barang,ab.order_barang,ab.status,ab.jml_qty FROM barang as a, pelanggan as ab 
      WHERE a.id_barang=ab.id_pelanggan";
      return $this->db->query($data);
   }

   public function simpan_data($param){
   		$this->db->insert('pelanggan', $param);
   }

   public function hapus($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
   }

}