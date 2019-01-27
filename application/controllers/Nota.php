<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nota extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/tampilan_nota';
		$isi['judul'] 	='Data nota';
		$isi['view'] 	='Tampilan nota';
		$isi['menu'] 	= 'nota';
		$isi['submenu'] = 'nota';
		$isi['data']	= $this->db->get('tabel_nota');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/nota/form_nota';
		$isi['judul'] 	='Form nota';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'nota';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
		$key					= $this->input->POST('id_nota');
		$data['id_nota']		= $this->input->POST('id_nota');
		$data['tgl_nota']		= $this->input->POST('tgl_nota');
		$data['id_kons'] 		= $this->input->POST('id_kons');
		$data['total_nota']		= $this->input->POST('total_nota');
		$data['status']	  		= $this->input->POST('status');
		$data['note']	  		= $this->input->POST('note');
		$this->load->model('model_nota');
		$query = $this->model_nota->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_nota->getupdate($key,$data);
			
		}
		else{
			$this->model_nota->getinsert($data);
			
		}
		redirect('nota');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_nota');
			$isi['content']='Tadmin/nota/form_editnota';
			$isi['judul'] 	='Data nota';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'nota';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id_nota',$key);
			$query = $this->db->get('tabel_nota');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id_nota']				=$row->id_nota;
					$isi['tgl_nota']			=$row->tgl_nota;
					$isi['id_kons']				=$row->id_kons;
					$isi['total_nota']			=$row->total_nota;
					$isi['status']				=$row->status;
					$isi['note']				=$row->note;

				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_nota');

		$key = $this->uri->segment(3);
		$this->db->where('id_nota',$key);
		$query = $this->db->get('tabel_nota');
		if ($query->num_rows()>0) {
			$this->model_nota->getdelete($key);
		}
		redirect('nota');
	}
	public function info(){
			$this->model_security->getsecurity();
			$this->load->model('model_nota');
			$isi['content']='Tadmin/nota/detail_nota';
			$isi['judul'] 	='Data nota';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'nota';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id_nota',$key);
			$query = $this->db->get('tabel_nota');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id_nota']			=$row->id_nota;
					$isi['tgl_nota']		=$row->tgl_nota;
					$isi['id_kons']			=$row->id_kons;
					$isi['total_nota']		=$row->total_nota;
					$isi['status']			=$row->status;
					$isi['note']			=$row->note;

				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);
	}
}
