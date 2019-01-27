<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_berita extends CI_model {

	public function all()
	{	
		//query semua record di table products
		$hasil = $this->db->get('berita');
		if($hasil->num_rows()>0){
			return $hasil->result();
		}
		else
		{
			return array(); 
		}
	}
	public function all1()
	{	
		//query semua record di table products
		$hasil = $this->db->get('buku_tamu');
		if($hasil->num_rows()>0){
			return $hasil->result();
		}
		else
		{
			return array(); 
		}
	}
	public function find($id){
		$hasil = $this->db->where('id',$id)
							->limit(1)
							->get('berita');
		if ($hasil->num_rows()>0) {
			return $hasil->row();
		}
		else{
			return array();
		}
	}
	public function search($id){
		 $this->db->where('id',$id);
				$hasil = $this->db->get('berita');
		if ($hasil->num_rows()>0) {
			return $hasil->result();
		}
		else{
			return array();
		}
	}
	public function create($data){
		//query menambahkan data kedalam database
		$this->db->insert('berita',$data);
	}
	public function tamu($data){
		//query menambahkan data kedalam database
		 $this->db->insert('buku_tamu',$data);
		
	}
	public function update($id,$data){
		$this->db->where('id',$id)
				 ->update('berita',$data);
	}
	public function delete($id){
		$this->db->where('id',$id)
				 ->delete('berita');
	}
	
}
