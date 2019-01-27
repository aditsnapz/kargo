<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_security extends CI_model {

	
	public function getsecurity()
	{
		$use= $this->session->userdata('username');
		
		if (empty($use) ) {
		$this->session->sess_destroy();
		redirect('login');
		}
	}
}
