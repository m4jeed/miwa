<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	public function data_karyawan(){
		$data = $this->db->query("SELECT * from karyawan");
		return $data->result();
	}

	public function simpan($data_encode){
		$this->db->insert('karyawan', $data_encode);
		return $this->db->insert_id();
	}

	public function edit($id){
		$this->db->from('karyawan');
		$this->db->where('id_karyawan', $id);
		$query =$this->db->get();
		return $query->row();
	}

	public function update($id, $data){
        $this->db->where('id_karyawan', $id);
        $this->db->update('karyawan', $data);
        //print_r($this->db->last_query());
       // return $this->db->affected_rows();
    }

	public function hapus($id){
		$this->db->where('id_karyawan', $id);
		$this->db->delete('karyawan');
	}

}