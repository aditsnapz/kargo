<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		     parent::__construct();
             $this->load->library('fpdf181/fpdf');
             $this->load->model('model_nilai');
             $this->load->model('model_pegawai');
             $this->load->model('model_peserta');
	}
	function index() 
	{ 
		$this->model_security->getsecurity();
		define('FPDF_FONTPATH',$this->config->item('fonts_path')); 
		$this->load->view('laporan/page_laporan');
	}
	function bendahara() 
	{ 
		$this->model_security->getsecurity();
		define('FPDF_FONTPATH',$this->config->item('fonts_path')); 
		$this->load->view('laporan/laporan_absenbendahara');
	}
	function pendidik() 
	{ 
		$this->model_security->getsecurity();
		define('FPDF_FONTPATH',$this->config->item('fonts_path')); 
		$this->load->view('laporan/laporan_absenpendidik');
	}
	function peserta() 
	{ 
		$this->model_security->getsecurity();
		define('FPDF_FONTPATH',$this->config->item('fonts_path')); 
		$this->load->view('laporan/laporan_absenpeserta');
	}
	function admin() 
	{ 
		$this->model_security->getsecurity();
		define('FPDF_FONTPATH',$this->config->item('fonts_path')); 
		$this->load->view('laporan/laporan_absenadmin');
	}
	function keuangan(){
		$this->model_security->getsecurity();
		define('FPDF_FONTPATH',$this->config->item('fonts_path')); 
		$this->load->view('laporan/laporan_keuangan');
	}
}

