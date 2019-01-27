<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jual extends CI_model {

	public function getdata($key)
	{	
		$this->db->where('id',$key );
		$hasil =$this->db->get('tabel_jual');

		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('id',$key);
		$this->db->update('tabel_jual',$data);
	}
	public function getinsert($data){
	
		$this->db->insert('tabel_jual',$data);
	}
	public function getdelete($key){
		$this->db->where('id',$key);
		$this->db->delete('tabel_jual');
	}
	public function data(){
		$hasil = $this->db->get('tabel_jual');
		return $hasil;
	}
}
