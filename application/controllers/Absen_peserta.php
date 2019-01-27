<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_peserta extends CI_Controller {

	public function __construct()
	{
		     parent::__construct();
             $this->load->model('model_peserta');
	}
	function index() 
	{ 
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/pendaftar/tampil_absenpeserta';
		$isi['judul'] 	='Data Peserta';
		$isi['view'] 	='Tampilan Peserta';
		$isi['menu'] 	= 'Peserta';
		$isi['submenu'] = 'Pendaftar';
		$isi['data']	= $this->db->get('pendaftar');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	function simpan(){
		$this->model_security->getsecurity();
	
		$pwd 					= md5($this->input->POST('password'));
		$key					= $this->input->POST('nama');
		$data['nm_peserta']		= $this->input->POST('nama');
		$data['tgl']			= $this->input->POST('tgl');
		$data['jk']				= $this->input->POST('jk');
		$data['kemampuan']		= $this->input->POST('kemampuan');
		$data['agama']			= $this->input->POST('agama');
		$data['alamat']			= $this->input->POST('alamat');
		$data['absen']			= $this->input->POST('absen');
		
		$this->load->model('model_peserta');
		$query = $this->model_peserta->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_peserta->getupdate($key,$data);
			
		}
		else{
			$this->model_peserta->getinsert($data);
			
		}
		redirect('absen_peserta');
	}
	function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_peserta');
			$isi['content']='Tadmin/pendaftar/edit_absenpeserta';
			$isi['judul'] 	='Data Peserta';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'Peserta';
			$isi['submenu'] = 'Absen Peserta';
			$key =$this->uri->segment(3); 
			$this->db->where('nm_peserta',$key);
			$query = $this->db->get('pendaftar');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['nama']		=$row->nm_peserta;
					$isi['tgl']			=$row->tgl;
					$isi['jk']			=$row->jk;
					$isi['kemampuan']	=$row->kemampuan;
					$isi['agama']		=$row->agama;
					$isi['alamat']		=$row->alamat;
					$isi['absen']		=$row->absen;
					
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}

}

