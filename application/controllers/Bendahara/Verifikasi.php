<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tbendahara/Verifikasi/Tampilan_verifikasi';
		$isi['judul'] 	='Data Bendahara';
		$isi['view'] 	='Tampilan Bendahara';
		$isi['menu'] 	= 'Verifikasi';
		$isi['submenu'] = 'Verifikasi Peserta';
		$isi['data']	= $this->db->get('pendaftar');
		$this->load->view('Tbendahara/tampilan_bendahara',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
		$pwd 					= md5($this->input->POST('password'));
		$key					= $this->input->POST('nama');
		$data['nm_peserta']		= $this->input->POST('nama');
		//$data['kd_program']		= $this->input->POST('program');
		//$data['id_jadwal']		= $this->input->POST('jadwal');
		//$data['tgl']			= $this->input->POST('tgl');
		//$data['jk']				= $this->input->POST('jk');
		//$data['kemampuan']		= $this->input->POST('kemampuan');
		//$data['agama']			= $this->input->POST('agama');
		$data['alamat']			= $this->input->POST('alamat');
		$data['tagihan']		= $this->input->POST('tagihan');
		$data['status_bayar']	= $this->input->POST('status');

		$this->load->model('model_peserta');
		$query = $this->model_peserta->getdata($key);
		
		if ($query->num_rows()>0) {
			$this->model_peserta->getupdate($key,$data);
			
		}
		else{
			$this->model_peserta->getinsert($data);
			
		}
		redirect('Bendahara/Verifikasi');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_peserta');
			$isi['content']='Tbendahara/Verifikasi/Edit_verifikasi';
			$isi['judul'] 	='Data Peserta';
			$isi['view'] 	='Edit Verifikasi';
			$isi['menu'] 	= 'Peserta';
			$isi['submenu'] = 'Verifikasi Pembayaran';
			$key =$this->uri->segment(4); 
			$this->db->where('nm_peserta',$key);
			$query = $this->db->get('pendaftar');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['nama']		=$row->nm_peserta;
					$isi['program']		=$row->kd_program;
					$isi['jadwal']		=$row->id_jadwal;
					$isi['tgl']			=$row->tgl;
					$isi['jk']			=$row->jk;
					$isi['kemampuan']	=$row->kemampuan;
					$isi['agama']		=$row->agama;
					$isi['alamat']		=$row->alamat;
					$isi['tagihan']		=$row->tagihan;
					$isi['status']		=$row->status_bayar;
					
				}
			}
			$this->load->view('Tbendahara/tampilan_bendahara',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_peserta');

		$key = $this->uri->segment(4);
		$this->db->where('nm_peserta',$key);
		$query = $this->db->get('pendaftar');
		if ($query->num_rows()>0) {
			$this->model_peserta->getdelete($key);
		}
		redirect('Bendahara/Verifikasi');
	}
	
}
