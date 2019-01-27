<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hpimpinan extends CI_Controller {

	
	public function index()
	{	
		$this->model_security->getsecurity();
		$isi['content']	= 'Pim/menu_content';
		$isi['judul'] 	= 'Dashboard';
		$isi['view'] 	='Tampilan Utama';
		$isi['menu'] 	= 'Dashboard';
		$isi['submenu'] = '';
		$this->load->view('Pim/tampilan_pimpinan',$isi);
		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
