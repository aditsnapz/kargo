<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Pim/view/Absensi_keseluruhan';
		$isi['judul'] 	='Absensi Keseluruhan';
		$isi['view'] 	='Tampilan keseluruhan';
		$isi['menu'] 	= 'Pimpianan';
		$isi['submenu'] = 'Absensi';
		$this->load->view('Pim/tampilan_pimpinan',$isi);
	}
	public function keuangan(){
		$this->model_security->getsecurity();
		$isi['content']	='Pim/view/laporan_keuangan';
		$isi['judul'] 	='Laporan Keuangan';
		$isi['view'] 	='Keuangan Perhari';
		$isi['menu'] 	= 'Pimpianan';
		$isi['submenu'] = 'Total';
		$this->load->view('Pim/tampilan_pimpinan',$isi);
	}
	
	
}
