<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/tampilan_barang';
		$isi['judul'] 	='Data barang';
		$isi['view'] 	='Tampilan barang';
		$isi['menu'] 	= 'barang';
		$isi['submenu'] = 'barang';
		$isi['data']	= $this->db->get('tabel_barang');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/barang/form_barang';
		$isi['judul'] 	='Form barang';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'barang';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
		$key					= $this->input->POST('id_barang');
		$data['id_barang']		= $this->input->POST('id_barang');
		$data['nama_barang']	= $this->input->POST('nama_barang');
		$data['satuan'] 		= $this->input->POST('satuan');
		$data['harga_barang']	= $this->input->POST('harga_barang');
		$data['stok']	  		= $this->input->POST('stok');
		$this->load->model('model_barang');
		$query = $this->model_barang->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_barang->getupdate($key,$data);
			
		}
		else{
			$this->model_barang->getinsert($data);
			
		}
		redirect('barang');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_barang');
			$isi['content']='Tadmin/barang/form_editbarang';
			$isi['judul'] 	='Data barang';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'barang';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id_barang',$key);
			$query = $this->db->get('tabel_barang');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id_barang']			=$row->id_barang;
					$isi['nama_barang']			=$row->nama_barang;
					$isi['satuan']				=$row->satuan;
					$isi['harga_barang']		=$row->harga_barang;
					$isi['stok']				=$row->stok;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_barang');

		$key = $this->uri->segment(3);
		$this->db->where('id_barang',$key);
		$query = $this->db->get('tabel_barang');
		if ($query->num_rows()>0) {
			$this->model_barang->getdelete($key);
		}
		redirect('barang');
	}
	public function info(){
			$this->model_security->getsecurity();
			$this->load->model('model_barang');
			$isi['content']='Tadmin/barang/detail_barang';
			$isi['judul'] 	='Data barang';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'barang';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id_barang',$key);
			$query = $this->db->get('tabel_barang');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id_barang']		=$row->id_barang;
					$isi['nama_barang']		=$row->nama_barang;
					$isi['satuan']			=$row->satuan;
					$isi['harga_barang']	=$row->harga_barang;
					$isi['stok']			=$row->stok;
					
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);
	}
}
