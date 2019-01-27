<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{
		$this->load->view('tampilan_login');
	}
	public function getlogin(){
	
		$u = $this->input->POST('username');
		$p = $this->input->POST('password');
		$l = $this->input->POST('level');
		$this->load->model('model_login');
		$this->model_login->getlogin($u,$p,$l);
	}
}
