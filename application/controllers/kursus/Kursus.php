<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_berita');
		
	}
	public function index()
	{	
		$isi['berita']	='frontendview/berita';
		$isi['sidebar'] 	='frontendview/sidebar';
		$isi['data'] 	=$this->model_berita->all();
		$this->load->view('frontendview/tampilan_frontend',$isi);
	}
	public function kursus(){
		$isi['kursus']	='frontendview/kursus';
		$isi['sidebar'] 	='frontendview/sidebar';
		$isi['data'] 	=$this->model_berita->all();
		$this->load->view('frontendview/tampilan_frontend',$isi);
	}
	
}
