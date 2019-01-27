<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/tampil_datapegawai';
		$isi['judul'] 	='Data Pegawai';
		$isi['view'] 	='Tampilan Pegawai';
		$isi['menu'] 	= 'Data Pegawai';
		$isi['submenu'] = 'Pegawai';
		$isi['data']	= $this->db->get('pengguna');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/form_tambahpegawai';
		$isi['judul'] 	='Data Pegawai';
		$isi['view'] 	='Form Pegawai';
		$isi['menu'] 	= 'Pegawai';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function simpan(){
		$this->model_security->getsecurity();
		$this->load->model('model_pegawai');
		$pwd = md5($this->input->POST('password'));
		$key 					= $this->model_pegawai->anti_xss($this->input->POST('kode'));
		$data['kd_jabatan']		= $this->model_pegawai->anti_xss($this->input->POST('kode'));
		$data['nama_p']			= $this->model_pegawai->anti_xss($this->input->POST('nama'));
		$data['jabatan']		= $this->model_pegawai->anti_xss($this->input->POST('jabatan'));
		$data['password']		= $pwd;
		$data['alamat']			= $this->input->POST('alamat');
		$data['agama']			= $this->input->POST('agama');
		$data['kota']			= $this->input->POST('kota');
		$data['lulusan']		= $this->input->POST('lulusan');

		
		$query = $this->model_pegawai->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_pegawai->getupdate($key,$data);
			
		}
		else{
			$this->model_pegawai->getinsert($data);
			
		}
		redirect('pegawai');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_pegawai');
			$isi['content']='Tadmin/form_editpegawai';
			$isi['judul'] 	='Data Pegawai';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'Pegawai';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('kd_jabatan',$key);
			$query = $this->db->get('pengguna');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['kode']		=$row->kd_jabatan;
					$isi['nama']		=$row->nama_p;
					$isi['jabatan']		=$row->jabatan;
					$isi['password']	=$row->password;
					$isi['alamat']		=$row->alamat;
					$isi['agama']		=$row->agama;
					$isi['kota']		=$row->kota;
					$isi['lulusan']		=$row->lulusan;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_pegawai');

		$key = $this->uri->segment(3);
		$this->db->where('kd_jabatan',$key);
		$query = $this->db->get('pengguna');
		if ($query->num_rows()>0) {
			$this->model_pegawai->getdelete($key);
		}
		redirect('pegawai');
	}
}
