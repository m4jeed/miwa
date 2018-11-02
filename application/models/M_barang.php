<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

  	function __construct(){
          parent::__construct();
      
      }

    public function count_alls(){
        return $this->db->count_all_results('barang');
    }

    public function getkode($data){
        return $this->db->get_where('barang', array('kode_barang'=>$data));
    }

    //public function detail($id_barang){
      // $this->db->from('barang');
      // $this->db->where('id_barang', $id_barang);
      // $query = $this->db->get();
      // return $query->row();
      //$query = $this->db->query('SELECT kode_barang,nama_barang,harga from barang where id_barang =' .$id_barang);
      //$query = $this->db->query('SELECT vacancies_id,name, vacancie_desc, pay FROM vacancies WHERE vacancies_id=' . $id);
      //return $data->result();
    //}

    public function data_barang(){
      	/*$data = $this->db->query("SELECT barang.id_barang,barang.nama_barang, kategori_barang.nama_kategori, barang.harga from barang 
      		INNER JOIN kategori_barang ON barang.id_kategori=kategori_barang.id_kategori");
      	return $data->result();*/
        $data= "SELECT b.id_barang,b.nama_barang,b.kode_barang,kb.nama_kategori,b.harga
                    FROM barang as b,kategori_barang as kb
                    WHERE b.id_kategori=kb.id_kategori";
            return $this->db->query($data);
    } 

    public function simpan($data_array){
        $this->db->insert('barang', $data_array);
    }

    public function edit_barang($id){ 
        $SQL = "SELECT A.* , B.nama_kategori FROM barang A INNER JOIN kategori_barang B ON A.id_kategori = B.id_kategori WHERE id_barang ='$id'";
        $QUERY = $this->db->query($SQL);
        return $QUERY->result();

        
    }

    public function kategori(){
        return $this->db->get('kategori_barang')->result(); //ini
    }

    public function check_barang($cek_barang){
        $this->db->select('nama_barang');
        $this->db->where('nama_barang',$cek_barang);    
        $query =$this->db->get('barang');
        $row = $query->row();
        if ($query->num_rows > 0){
             return $row->nama_barang; 
        }else{
             return "";
        }
    }

    public function check_code($cek_code){
        $this->db->select('kode_barang');
        $this->db->where('kode_barang',$cek_code);    
        $query =$this->db->get('barang');
        $row = $query->row();
        if ($query->num_rows > 0){
             return $row->kode_barang; 
        }else{
             return "";
        }
    }

    public function update_barang($id, $data){
        $this->db->where('id_barang', $id);
        $this->db->update('barang', $data);
    }
     
   public function delete_barang($where, $table){
      $this->db->where($where);
      $this->db->delete($table);
   }

}