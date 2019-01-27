<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hbendahara extends CI_Controller {

	
	public function index()
	{	
		$this->model_security->getsecurity();
		$isi['content']	='Tbendahara/menu_content';
		$isi['judul'] 	='Dashboard';
		$isi['view'] 	='Tampilan Utama';
		$isi['menu'] 	= 'Dashboard';
		$isi['submenu'] = '';
		//$this->load->view('Tadmin/tampilan_admin',$isi);
		$this->load->view('Tbendahara/tampilan_bendahara',$isi);
		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
