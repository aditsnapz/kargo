<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konsumen extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/tampilan_konsumen';
		$isi['judul'] 	='Data Konsumen';
		$isi['view'] 	='Tampilan Konsumen';
		$isi['menu'] 	= 'Konsumen';
		$isi['submenu'] = 'konsumen';
		$isi['data']	= $this->db->get('tabel_kons');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/konsumen/form_konsumen';
		$isi['judul'] 	='Form konsumen';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'Konsumen';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
	
		$pwd 					= md5($this->input->POST('password'));
		$key					= $this->input->POST('id_kons');
		$data['id_kons']		= $this->input->POST('id_kons');
		$data['nama_kons']		= $this->input->POST('nama_kons');
		$data['password']		= $pwd;
		$data['jenis_kelamin']	= $this->input->POST('jenis_kelamin');
		$data['alamat_kons']	= $this->input->POST('alamat_kons');
		$data['no_telp']		= $this->input->POST('no_telp');
		$this->load->model('model_konsumen');
		$query = $this->model_konsumen->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_konsumen->getupdate($key,$data);
			
		}
		else{
			$this->model_konsumen->getinsert($data);
			
		}
		redirect('konsumen');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_konsumen');
			$isi['content']='Tadmin/konsumen/form_editkonsumen';
			$isi['judul'] 	='Data konsumen';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'konsumen';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id_kons',$key);
			$query = $this->db->get('tabel_kons');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id_kons']		=$row->id_kons;
					$isi['nama_kons']		=$row->nama_kons;
					$isi['password']		=$row->password;
					$isi['jenis_kelamin']	=$row->jenis_kelamin;
					$isi['alamat_kons']		=$row->alamat_kons;
					$isi['no_telp']			=$row->no_telp;
					
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_konsumen');

		$key = $this->uri->segment(3);
		$this->db->where('id_kons',$key);
		$query = $this->db->get('tabel_kons');
		if ($query->num_rows()>0) {
			$this->model_konsumen->getdelete($key);
		}
		redirect('konsumen');
	}
	public function info(){
			$this->model_security->getsecurity();
			$this->load->model('model_konsumen');
			$isi['content']='Tadmin/konsumen/detail_konsumen';
			$isi['judul'] 	='Data konsumen';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'konsumen';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id_kons',$key);
			$query = $this->db->get('tabel_kons');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id_kons']		=$row->id_kons;
					$isi['nama_kons']		=$row->nama_kons;
					$isi['password']		=$row->password;
					$isi['jenis_kelamin']	=$row->jenis_kelamin;
					$isi['alamat_kons']		=$row->alamat_kons;
					$isi['no_telp']			=$row->no_telp;
					
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
}
