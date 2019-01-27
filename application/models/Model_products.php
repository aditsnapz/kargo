<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model {

  public function all(){
		//query semua record di table products
		$hasil = $this->db->get('tabel_barang');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id_barang', $id)
						  ->limit(1)
						  ->get('tabel_barang');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}
	public function insert($data){
	
		$this->db->insert('tabel_nota',$data);
	}
	public function getjual(){		
		$hasil = "SELECT
tabel_nota.id_nota,
tabel_nota.tgl_nota,
tabel_kons.id_kons,
tabel_nota.total_nota,
tabel_nota.status,
tabel_nota.note
FROM
tabel_nota
INNER JOIN tabel_kons ON tabel_nota.id_kons = tabel_kons.id_kons
";
$hasil = $this->db->query($hasil);
		return $hasil;
	}

}
