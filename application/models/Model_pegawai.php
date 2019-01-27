<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_model {

	public function getdata($key)
	{	
		$this->db->where('kd_jabatan',$key );
		$hasil =$this->db->get('pengguna');

		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('kd_jabatan',$key);
		$this->db->update('pengguna',$data);
	}
	public function getinsert($data){
		$this->db->insert('pengguna',$data);
	}
	public function getdelete($key){
		$this->db->where('kd_jabatan',$key);
		$this->db->delete('pengguna');
	}
	public function absenbendahara(){
		$level = "Bendahara";
		$this->db->where('jabatan',$level
			);
		$query = $this->db->get('pengguna');
		return $query;
	}
	public function absenpendidik(){
		$level = "Pendidik";
		$this->db->where('jabatan',$level
			);
		$query = $this->db->get('pengguna');
		return $query;
	}
	public function absenpeserta(){
		$query = $this->db->get('pendaftar');
		return $query;
	}
	public function anti_xss($source){
		$f = str_replace("/(<\/?)(p)([^>]*)","",stripslashes(strip_tags(htmlspecialchars($source,ENT_QUOTES))));
		return $f;
	}
	
}
