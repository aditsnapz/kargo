<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_peserta extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$this->load->model('Model_nilai');
		$isi['content']	='Tadmin/tampilan_nilaipeserta';
		$isi['judul'] 	='Data Peserta';
		$isi['view'] 	='Tampilan Peserta';
		$isi['menu'] 	= 'Data Peserta';
		$isi['submenu'] = 'Nilai_peserta';
		$isi['data']	= $this->Model_nilai->tampil_nilaipeserta();
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$this->load->model('Model_nilai');
		$isi['content']='Tadmin/nilai_peserta/form_tambahnilai';
		$isi['judul'] 	='Form Peserta';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'Nilai Peserta';
		$isi['submenu'] = 'Tambah';
		$isi['data']	= $this->Model_nilai->tampil_nilaipeserta();
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambahjeans(){
		$this->model_security->getsecurity();
		$this->load->model('Model_nilai');
		$isi['content']='Tadmin/nilai_peserta/form_tambahjeans';
		$isi['judul'] 	='Form Peserta';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'Nilai Peserta';
		$isi['submenu'] = 'Tambah';
		$isi['data']	= $this->Model_nilai->tampil_nilaipeserta();
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambahkemeja(){
		$this->model_security->getsecurity();
		$this->load->model('Model_nilai');
		$isi['content']='Tadmin/nilai_peserta/form_tambahkemeja';
		$isi['judul'] 	='Form Peserta';
		$isi['view'] 	='Tampilan Form Tambah';
		$isi['menu'] 	= 'Nilai Peserta';
		$isi['submenu'] = 'Tambah';
		$isi['data']	= $this->Model_nilai->tampil_nilaipeserta();
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
		public function simpan(){
		$this->model_security->getsecurity();
		
		$key					= $this->model_nilai->anti_xss($this->input->POST('peserta'));
		$data['nm_peserta']		= $this->model_nilai->anti_xss($this->input->POST('peserta'));
		$data['kd_jabatan']		= $this->model_nilai->anti_xss($this->input->POST('pendidik'));
		$data['tugas']			= $this->model_nilai->anti_xss($this->input->POST('tugas'));
		$data['uts']			= $this->model_nilai->anti_xss($this->input->POST('uts'));
		$data['uas']			= $this->model_nilai->anti_xss($this->input->POST('uas'));
		$data['na']	=$data['tugas']*0.3 + $data['uts']*0.3 + $data['uas']*0.4;
		$this->load->model('model_nilai');
		$query = $this->model_nilai->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_nilai->getupdate($key,$data);	
		}
		else{
			$this->model_nilai->getinsert($data);
			
		}
		redirect('nilai_peserta');
	}
		public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('Model_nilai');
			$isi['content']='Tadmin/nilai_peserta/form_editnilai';
			$isi['judul'] 	='Form Peserta';
			$isi['view'] 	='Tampilan Form Tambah';
			$isi['menu'] 	= 'Nilai Peserta';
			$isi['submenu'] = 'Tambah';
			$key =$this->uri->segment(3); 
			$query = $this->model_nilai->getdata($key);

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['peserta']		=$row->nm_peserta;
					$isi['pendidik']	=$row->kd_jabatan;
					$isi['tugas']		=$row->tugas;
					$isi['uts']			=$row->uts;
					$isi['uas']			=$row->uas;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_nilai');

		$key = $this->uri->segment(3);
		$this->db->where('nm_peserta',$key);
		$query = $this->db->get('pendaftar');
		if ($query->num_rows()>0) {
			$this->model_nilai->getdelete($key);
		}
		redirect('nilai_peserta');
	}


}
