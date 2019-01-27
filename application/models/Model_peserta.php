<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_peserta extends CI_model {

	public function getdata($key)
	{	
		$this->db->where('nm_peserta',$key );
		$hasil =$this->db->get('pendaftar');

		return $hasil;
	}
	public function getupdate($key,$data){
		$this->db->where('nm_peserta',$key);
		$this->db->update('pendaftar',$data);
	}
	public function getinsert($data){
	
		$this->db->insert('tabel_kons',$data);
	}
	public function getdelete($key){
		$this->db->where('nm_peserta',$key);
		$this->db->delete('pendaftar');
	}
	public function data(){
		$hasil = $this->db->get('pendaftar');
		return $hasil;
	}
	public function tampilkeuangan(){
		$query = "SELECT
					tabel_jual.id_nota,
					tabel_jual.nama_barang,
					tabel_jual.satuan,
					tabel_jual.harga_barang,
					tabel_jual.jumlah_barang,
					tabel_jual.total_harga
					FROM
					tabel_jual";
		return $this->db->query($query);
	}
	public function tampilgaji(){
		$query = "SELECT 
					sum(tabel_jual.total_harga) as total 
					FROM
					tabel_jual";
					return $this->db->query($query);
	}
	
}
