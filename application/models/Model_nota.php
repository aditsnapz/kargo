<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nota extends CI_model {

	public function getdata($key)
	{	
		$this->db->where('id_nota',$key );
		$hasil =$this->db->get('tabel_nota');

		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('id_nota',$key);
		$this->db->update('tabel_nota',$data);
	}
	public function getinsert($data){
	
		$this->db->insert('tabel_nota',$data);
	}
	public function getdelete($key){
		$this->db->where('id_nota',$key);
		$this->db->delete('tabel_nota');
	}
	public function data(){
		$hasil = $this->db->get('tabel_nota');
		return $hasil;
	}
}
