<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_konsumen extends CI_model {

	public function getdata($key)
	{	
		$this->db->where('id_kons',$key );
		$hasil =$this->db->get('tabel_kons');

		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('id_kons',$key);
		$this->db->update('tabel_kons',$data);
	}
	public function getinsert($data){
	
		$this->db->insert('tabel_kons',$data);
	}
	public function getdelete($key){
		$this->db->where('id_kons',$key);
		$this->db->delete('tabel_kons');
	}
	public function data(){
		$hasil = $this->db->get('tabel_kons');
		return $hasil;
	}
}
