<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_logindaftar extends CI_model {

public function getlogin($u,$p)
	{
		$pwd=md5($p); 
		$this->db->where('nm_peserta',$u);
		$this->db->where('password',$pwd);
		$query= $this->db->get('pendaftar');

		if($query->num_rows()> 0){
			foreach ($query->result() as $row ) {
				$sess = array(	
					'username'		=>$row->nm_peserta,
					'password'		=>$row->password);
						$this->session->set_userdata($sess);

						return true;
					
			}
		}
		else{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('frontend');
			return false;
		}
	}
	public function getdata($u){		
		$hasil = "SELECT
pengguna.nama_p,
pendaftar.tugas,
pendaftar.tagihan,
pendaftar.status_bayar,
pendaftar.uts,
pendaftar.uas,
pendaftar.na,
pendaftar.tgl,
pendaftar.alamat,
pendaftar.kemampuan,
pendaftar.agama,
pendaftar.nm_peserta
FROM
pendaftar
INNER JOIN pengguna ON pendaftar.kd_jabatan = pengguna.kd_jabatan
WHERE pendaftar.nm_peserta = '$u'
";
$hasil = $this->db->query($hasil);
		return $hasil;
	}
		
		
	}