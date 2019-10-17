<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Controller {

	
public function tampil_data()
	{
		$data=$this->db->get("Mahasiswa");
		return $data;
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	/* Membuat perintah insert ke database*/
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	/*Membuat perintah hapus dari table*/
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	/*Membuat perintah edit dari table*/
	}


