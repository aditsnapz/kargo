<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_logindaftar2 extends CI_model {

public function getlogin($u,$p)
	{
		$pwd=md5($p); 
		$this->db->where('nama_kons',$u);
		$this->db->where('password',$pwd);
		$query= $this->db->get('tabel_kons');

		if($query->num_rows()> 0){
			foreach ($query->result() as $row ) {
				$sess = array(
					'id_kons'		=>$row,
					'nama_kons'		=>$row->nama_kons,
					'password'		=>$row->password);
						$this->session->set_userdata($sess);
						return true;		
			}
		}
		else{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('Frontend2');
			return false;
		}
	}
	public function getdata($u){		
		$hasil = "SELECT
tabel_kons.id_kons,
tabel_kons.nama_kons,
tabel_kons.password,
tabel_kons.jenis_kelamin,
tabel_kons.alamat_kons,
tabel_kons.no_telp
FROM
tabel_kons
WHERE tabel_kons.nama_kons = '$u'
";
$hasil = $this->db->query($hasil);
		return $hasil;
	}
		
		
	}