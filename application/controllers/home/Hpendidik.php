<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hpendidik extends CI_Controller {

	
	public function index()
	{	
		$this->model_security->getsecurity();
		$isi['content']	='Pendidik/menu_contentpendidik';
		$isi['judul'] 	='Dashboard';
		$isi['view'] 	='Tampilan Utama';
		$isi['menu'] 	= 'Dashboard';
		$isi['submenu'] = '';
		$this->load->view('Pendidik/tampilan_pendidik',$isi);
		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
