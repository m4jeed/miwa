<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

	public function cek_user($dataArray){
			$query = $this->db->get_where('tbl_login', $dataArray);
			return $query;
		}

	public function count_all(){
		return $this->db->count_all_results('tbl_login');
	}

}
