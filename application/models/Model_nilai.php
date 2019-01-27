<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_nilai extends CI_model {

	public function tampil_nilaipeserta()
	{	
		//return $this->db->get('mata_kuliah');
		$data = "SELECT
pendaftar.nm_peserta,
pengguna.nama_p,
program_pelatihan.program_pelatihan,
pendaftar.tugas,
pendaftar.uts,
pendaftar.uas,
pendaftar.na
FROM
program_pelatihan
INNER JOIN pendaftar ON pendaftar.kd_program = program_pelatihan.kd_program
INNER JOIN pengguna ON pengguna.kd_jabatan = pendaftar.kd_jabatan

				";
				
			return $this->db->query($data);
	}
	public function getdata($key)
	{	
		$this->db->where('nm_peserta',$key);
		$hasil =$this->db->get('pendaftar');

		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('nm_peserta',$key);
		$this->db->update('pendaftar',$data);
	}
	public function getinsert($data){
		$this->db->insert('pendaftar',$data);
	}
	public function getdelete($key){
		$this->db->where('nm_peserta',$key);
		$this->db->delete('pendaftar');
	}
	public function anti_xss($source){
		$f = str_replace("/(<\/?)(p)([^>]*)","",stripslashes(strip_tags(htmlspecialchars($source,ENT_QUOTES))));
		return $f;
	}
	
}
  