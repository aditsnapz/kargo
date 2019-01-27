<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensibendahara extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tbendahara/absensi_bendahara/Tampilan_absensi';
		$isi['judul'] 	='Data Pendidik';
		$isi['view'] 	='absesni bendahara';
		$isi['menu'] 	= 'Bendahara';
		$isi['submenu'] = 'absen';
		$level = "Bendahara";
		$this->db->where('jabatan',$level);
		$query = $this->db->get('pengguna');
		$isi['data']	= $query;
		$this->load->view('Tbendahara/tampilan_bendahara',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
		$key				= $this->input->POST('kode');	 
		$data['kd_jabatan']	= $this->input->POST('kode');	
		$data['nama_p']		= $this->input->POST('nama');
		$data['alamat']		= $this->input->POST('alamat');
		$data['agama']		= $this->input->POST('agama');
		$data['kota']		= $this->input->POST('kota');
		$data['absen']		= $this->input->POST('absen');

		$this->load->model('model_pegawai');
		$query = $this->model_pegawai->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_pegawai->getupdate($key,$data);
			
		}
		else{
			$this->model_pegawai->getinsert($data);
			
		}
		redirect('Bendahara/Absensibendahara');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_pegawai');
			$isi['content']='Tbendahara/absensi_bendahara/form_editabsensi';
			$isi['judul'] 	='Data Bendahara';
			$isi['view'] 	='absesni bendahara';
			$isi['menu'] 	= 'Bendahara';
			$isi['submenu'] = 'absen';
			$key =$this->uri->segment(4); 
			$this->db->where('kd_jabatan',$key);
			$query = $this->db->get('pengguna');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['kode']			=$row->kd_jabatan;
					$isi['nama']			=$row->nama_p;
					$isi['alamat']			=$row->alamat;
					$isi['agama']			=$row->agama;
					$isi['kota']			=$row->kota;
					$isi['absen']			=$row->absen;
				}
			}
			$this->load->view('Tbendahara/tampilan_bendahara',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_pegawai');

		$key = $this->uri->segment(4);
		$this->db->where('kd_jabatan',$key);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) {
			$this->model_pegawai->getdelete($key);
		}
		redirect('Bendahara/Absensibendahara');
	}
}
