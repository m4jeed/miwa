<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model {

  	function __construct(){
          parent::__construct();
      
      }

    public function data_akun(){
        $data = $this->db->query("SELECT * from tbl_login");
        return $data->result();                 
    } 

    public function simpan($data_encode){
    $this->db->insert('tbl_login', $data_encode);
    return $this->db->insert_id();
    }

    public function edit($id){
      $this->db->from('tbl_login');
      $this->db->where('uid', $id);
      $query =$this->db->get();
      return $query->row();
    }

    public function update($id, $data){
      $this->db->where('uid',$id);
      $this->db->update('tbl_login',$data);
    }

    public function delete_akun($where, $table){
      $this->db->where($where);
      $this->db->delete($table);
    }


}