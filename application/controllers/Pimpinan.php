<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/pimpinan/Absensi_keseluruhan';
		$isi['judul'] 	='Absensi Keseluruhan';
		$isi['view'] 	='Tampilan keseluruhan';
		$isi['menu'] 	= 'Pimpianan';
		$isi['submenu'] = 'Absensi';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function keuangan(){
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/pimpinan/laporan_keuangan';
		$isi['judul'] 	='Laporan Keuangan';
		$isi['view'] 	='Keuangan Perhari';
		$isi['menu'] 	= 'Pimpianan';
		$isi['submenu'] = 'Total';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	
	
}
