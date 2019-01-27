<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_berita');
		$this->load->model('model_pegawai');
		$this->load->model('model_logindaftar');
		$this->load->model('Model_peserta');
	}
	public function index()
	{	
		$isi['content']	='frontendview/content_home';
		$isi['data'] 	=$this->model_berita->all();
		$this->load->view('frontendview/tampilan_frontend',$isi);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Frontend');
	}
	public function kursus(){
		$isi['content']	='frontendview/kursus/kursus';
		$isi['sidebar'] 	='frontendview/sidebar';
		$isi['data'] 	=$this->model_berita->all();
		$this->load->view('frontendview/tampilan_frontend',$isi);
	}
	public function lihat(){
		$isi['content']		='frontendview/lihat_berita';
		$isi['sidebar'] 	='frontendview/sidebar';

		$key =$this->uri->segment(3); 
		$this->db->where('id',$key);
		$query = $this->db->get('berita');
		$isi['data'] 		= $query;
		$isi['dataisi'] = $this->model_berita->all1();
		$this->load->view('frontendview/tampilan_frontend',$isi);
	}

	public function simpan(){
		$this->load->model('model_berita');
		date_default_timezone_set('Asia/Jakarta');
		$data['nama']		= $this->input->POST('nama');
		$data['email']		= $this->input->POST('email');
		$data['pesan']		= $this->input->POST('pesan');
		$data['tgl']		= date('d-m-Y');
		$data['waktu']		= date('H:i:s');
		$this->model_berita->tamu($data);

		
		echo "Data Sukses Di Posting";
	}

	public function save(){
	$data['nm_peserta']		= $this->input->post('nama');
	$data['password']		= md5($this->input->post('password'));
	$data['kd_program	']		= $this->input->post('program');
	$data['id_jadwal']		= $this->input->post('jadwal');
	$data['hari']			= $this->input->post('hari');
	$data['tgl']			= $this->input->post('tgl');
	$data['jk']				= $this->input->post('jk');
	$data['kemampuan']		= $this->input->post('kemampuan');
	$data['agama']			= $this->input->post('agama');
	$data['alamat']			= $this->input->post('alamat');
	
	$this->Model_peserta->getinsert($data);

	$isi['content']			='frontendview/content_home';
	$isi['sidebar'] 		='frontendview/sidebar';
	$isi['data'] = $this->model_berita->all();
	
	$this->load->view('frontendview/tampilan_frontend',$isi);
	}

	public function getlogindaftar(){
		
		$u = $this->input->POST('username');
		$p = $this->input->POST('password');
		$cek = $this->model_logindaftar->getlogin($u,$p);
		$isi['content']		='frontendview/login/login';
		$isi['sidebar'] 	='frontendview/sidebar';
		$isi['data']		= $this->model_logindaftar->getdata($u);
		if ($cek==true) {
			$this->load->view('frontendview/tampilan_frontend',$isi);
		}
		else{
			redirect('frontend');
		}
		
	}
	
}
