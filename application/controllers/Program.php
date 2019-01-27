<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/program_pelatihan/tampilan_program';
		$isi['judul'] 	='Data Peserta';
		$isi['view'] 	='Program Pelatihan';
		$isi['menu'] 	= 'Pelatihan';
		$isi['submenu'] = 'program';
		$isi['data']	= $this->db->get('program_pelatihan');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/program_pelatihan/form_tambahprogram';
		$isi['judul'] 	='Pengaturan Program';
		$isi['view'] 	='Form Tambah Program';
		$isi['menu'] 	= 'Program';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function simpan(){
		$this->model_security->getsecurity();
		$key							= $this->input->POST('kode');	 
		$data['kd_program']				= $this->input->POST('kode');	
		$data['program_pelatihan']		= $this->input->POST('program');
		$data['harga']					= $this->input->POST('harga');

		$this->load->model('model_program');
		$query = $this->model_program->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_program->getupdate($key,$data);
			
		}
		else{
			$this->model_program->getinsert($data);
			
		}
		redirect('program');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_program');
			$isi['content']='Tadmin/program_pelatihan/form_editprogram';
			$isi['judul'] 	='Pengaturan Program';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'Program';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('kd_program',$key);
			$query = $this->db->get('program_pelatihan');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['kode']			=$row->kd_program;
					$isi['program']			=$row->program_pelatihan;
					$isi['harga']			=$row->harga;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_program');

		$key = $this->uri->segment(3);
		$this->db->where('kd_program',$key);
		$query = $this->db->get('program_pelatihan');
		if ($query->num_rows()>0) {
			$this->model_program->getdelete($key);
		}
		redirect('program');
	}
}
