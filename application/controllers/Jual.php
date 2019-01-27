<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jual extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/tampilan_jual';
		$isi['judul'] 	='Data jual';
		$isi['view'] 	='Tampilan jual';
		$isi['menu'] 	= 'jual';
		$isi['submenu'] = 'jual';
		$isi['data']	= $this->db->get('tabel_jual');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/jual/form_jual';
		$isi['judul'] 	='Form jual';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'jual';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
		$key					= $this->input->POST('id');
		$data['id_nota']		= $this->input->POST('id_nota');
		$data['id_barang']		= $this->input->POST('id_barang');
		$data['nama_barang'] 	= $this->input->POST('nama_barang');
		$data['satuan']			= $this->input->POST('satuan');
		$data['harga_barang']	= $this->input->POST('harga_barang');
		$data['jumlah_barang']	= $this->input->POST('jumlah_barang');
		$data['diskon']	  		= $this->input->POST('diskon');
		$data['total_harga'] 	= $this->input->POST('total_harga');
		$this->load->model('model_jual');
		$query = $this->model_jual->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_jual->getupdate($key,$data);
			
		}
		else{
			$this->model_jual->getinsert($data);
			
		}
		redirect('jual');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_jual');
			$isi['content']='Tadmin/jual/form_editjual';
			$isi['judul'] 	='Data jual';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'jual';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id',$key);
			$query = $this->db->get('tabel_jual');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id']					=$row->id;
					$isi['id_nota']				=$row->id_nota;
					$isi['id_barang']			=$row->id_barang;
					$isi['nama_barang']			=$row->nama_barang;
					$isi['satuan']				=$row->satuan;
					$isi['harga_barang']		=$row->harga_barang;
					$isi['jumlah_barang']		=$row->jumlah_barang;
					$isi['diskon']				=$row->diskon;
					$isi['total_harga']			=$row->total_harga;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_jual');

		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('tabel_jual');
		if ($query->num_rows()>0) {
			$this->model_jual->getdelete($key);
		}
		redirect('jual');
	}
	public function info(){
			$this->model_security->getsecurity();
			$this->load->model('model_jual');
			$isi['content']='Tadmin/jual/detail_jual';
			$isi['judul'] 	='Data jual';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'jual';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id',$key);
			$query = $this->db->get('tabel_jual');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id']					=$row->id;
					$isi['id_nota']				=$row->id_nota;
					$isi['id_barang']			=$row->id_barang;
					$isi['nama_barang']			=$row->nama_barang;
					$isi['satuan']				=$row->satuan;
					$isi['harga_barang']		=$row->harga_barang;
					$isi['jumlah_barang']		=$row->jumlah_barang;
					$isi['diskon']				=$row->diskon;
					$isi['total_harga']			=$row->total_harga;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);
	}
}
