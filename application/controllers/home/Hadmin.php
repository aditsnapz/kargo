<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hadmin extends CI_Controller {

	
	public function index()
	{	$this->model_security->getsecurity();
		$isi['content']	='Tadmin/menu_content';
		$isi['judul'] 	='Dashboard';
		$isi['view'] 	='Tampilan Utama';
		$isi['menu'] 	= 'Dashboard';
		$isi['submenu'] = '';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
