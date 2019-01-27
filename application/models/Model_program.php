<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_program extends CI_model {

	public function getdata($key)
	{	
		$this->db->where('kd_program',$key);
		$hasil =$this->db->get('program_pelatihan');

		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('kd_program',$key);
		$this->db->update('program_pelatihan',$data);
	}
	public function getinsert($data){
		$this->db->insert('program_pelatihan',$data);
	}
	public function getdelete($key){
		$this->db->where('kd_program',$key);
		$this->db->delete('program_pelatihan');
	}
	public function anti_xss($source){
		$f = str_replace("/(<\/?)(p)([^>]*)","",stripslashes(strip_tags(htmlspecialchars($source,ENT_QUOTES))));
		return $f;
	}
}
