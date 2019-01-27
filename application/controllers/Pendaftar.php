<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/tampilan_pendaftar';
		$isi['judul'] 	='Data Peserta';
		$isi['view'] 	='Tampilan Peserta';
		$isi['menu'] 	= 'Peserta';
		$isi['submenu'] = 'Pendaftar';
		$isi['data']	= $this->db->get('pendaftar');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/pendaftar/form_pendaftar';
		$isi['judul'] 	='Form Pendaftar';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'Peserta';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
	
		$pwd 					= md5($this->input->POST('password'));
		$key					= $this->input->POST('nama');
		$data['nm_peserta']		= $this->input->POST('nama');
		$data['kd_program']		= $this->input->POST('program');
		$data['id_jadwal']		= $this->input->POST('jadwal');
		$data['tgl']			= $this->input->POST('tgl');
		$data['hari']			= $this->input->POST('hari');
		$data['jk']				= $this->input->POST('jk');
		$data['kemampuan']		= $this->input->POST('kemampuan');
		$data['agama']			= $this->input->POST('agama');
		$data['alamat']			= $this->input->POST('alamat');
		$data['tagihan']		= $this->input->POST('tagihan');
		$data['status_bayar']	="Belum_Terbayar";
		$this->load->model('model_peserta');
		$query = $this->model_peserta->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_peserta->getupdate($key,$data);
			
		}
		else{
			$this->model_peserta->getinsert($data);
			
		}
		redirect('pendaftar');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_peserta');
			$isi['content']='Tadmin/pendaftar/form_editpendaftar';
			$isi['judul'] 	='Data Peserta';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'Peserta';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('nm_peserta',$key);
			$query = $this->db->get('pendaftar');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['nama']		=$row->nm_peserta;
					$isi['program']		=$row->kd_program;
					$isi['jadwal']		=$row->id_jadwal;
					$isi['tgl']			=$row->tgl;
					$isi['hari']		=$row->hari;
					$isi['jk']			=$row->jk;
					$isi['kemampuan']	=$row->kemampuan;
					$isi['agama']		=$row->agama;
					$isi['alamat']		=$row->alamat;
					$isi['tagihan']		=$row->tagihan;
					$isi['status']		=$row->status_bayar;
					
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_peserta');

		$key = $this->uri->segment(3);
		$this->db->where('nm_peserta',$key);
		$query = $this->db->get('pendaftar');
		if ($query->num_rows()>0) {
			$this->model_peserta->getdelete($key);
		}
		redirect('pendaftar');
	}
	public function info(){
			$this->model_security->getsecurity();
			$this->load->model('model_peserta');
			$isi['content']='Tadmin/pendaftar/detail_peserta';
			$isi['judul'] 	='Data Peserta';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'Peserta';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('nm_peserta',$key);
			$query = $this->db->get('pendaftar');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['nama']		=$row->nm_peserta;
					$isi['program']		=$row->kd_program;
					$isi['jadwal']		=$row->id_jadwal;
					$isi['tgl']			=$row->tgl;
					$isi['hari']		=$row->hari;
					$isi['jk']			=$row->jk;
					$isi['kemampuan']	=$row->kemampuan;
					$isi['agama']		=$row->agama;
					$isi['alamat']		=$row->alamat;
					$isi['tagihan']		=$row->tagihan;
					$isi['status'] 		=$row->status_bayar;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
}
