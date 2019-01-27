<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/absensi_bendahara/tampilan_verifikasi';
		$isi['judul'] 	='Data Bendahara';
		$isi['view'] 	='Tampilan Bendahara';
		$isi['menu'] 	= 'Verifikasi';
		$isi['submenu'] = 'Verifikasi Peserta';
		$isi['data']	= $this->db->get('pendaftar');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	
	public function simpan(){
		$this->model_security->getsecurity();
		$pwd 					= md5($this->input->POST('password'));
		$key					= $this->input->POST('nama');
		$data['nm_peserta']		= $this->input->POST('nama');
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
		redirect('verifikasi');
	}
	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_peserta');
			$isi['content']='Tadmin/absensi_bendahara/edit_verifikasi';
			$isi['judul'] 	='Data Peserta';
			$isi['view'] 	='Edit Verifikasi';
			$isi['menu'] 	= 'Peserta';
			$isi['submenu'] = 'Verifikasi Pembayaran';
			$key =$this->uri->segment(3); 
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
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_peserta');

		$key = $this->uri->segment(3);
		$this->db->where('nm_peserta',$key);
		$query = $this->db->get('pendaftar');
		if ($query->num_rows()>0) {
			$this->model_peserta->getdelete($key);
		}
		redirect('verifikasi');
	}
	
}
