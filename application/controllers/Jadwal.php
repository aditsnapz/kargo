<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

public function __construct()
	{
		     parent::__construct();
            
             $this->load->library('upload');
             $this->load->helper(array('url'));
	}

	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/tampil_jadwal';
		$isi['judul'] 	='Data Peserta';
		$isi['view'] 	='Pengaturan Jadwal';
		$isi['menu'] 	= 'Peserta';
		$isi['submenu'] = 'Jadwal';
		$isi['data']	= $this->db->get('jadwal');
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function tambah(){
		$this->model_security->getsecurity();
		$isi['content']='Tadmin/jadwal/form_tambahjadwal';
		$isi['judul'] 	='Pengaturan Jadwal';
		$isi['view'] 	='Form Set Jadwal';
		$isi['menu'] 	= 'Peserta';
		$isi['submenu'] = 'Tambah';
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function simpan(){
		$this->model_security->getsecurity();

       /* $config['upload_path'] = './file/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px //nama yang terupload nantinya
        $this->load->library('upload',$config);
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
             */  
                $key				= $this->input->POST('id');	 
				$data['id_jadwal']	= $this->input->POST('id');	
				$data['jadwal']		= $this->input->POST('jadwal');
		
				$this->load->model('model_jadwal');
				$query = $this->model_jadwal->getdata($key);
				
				if ($query->num_rows()>0) {
					$this->model_jadwal->getupdate($key,$data);
					
				}
				else{
					$this->model_jadwal->getinsert($data);
					
				}
				redirect('jadwal');
}
    

	public function edit(){
			$this->model_security->getsecurity();
			$this->load->model('model_jadwal');
			$isi['content']='Tadmin/jadwal/form_editjadwal';
			$isi['judul'] 	='Pengaturan Jadwal';
			$isi['view'] 	='Form Edit';
			$isi['menu'] 	= 'Jadwal';
			$isi['submenu'] = 'Edit';
			$key =$this->uri->segment(3); 
			$this->db->where('id_jadwal',$key);
			$query = $this->db->get('jadwal');

			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$isi['id']			=$row->id_jadwal;
					$isi['jadwal']		=$row->jadwal;
				}
			}
			$this->load->view('Tadmin/tampilan_admin',$isi);


	}
	function delete(){
		$this->model_security->getsecurity();
		$this->load->model('model_jadwal');

		$key = $this->uri->segment(3);
		$this->db->where('id_jadwal',$key);
		$query = $this->db->get('jadwal');
		if ($query->num_rows()>0) {
			$this->model_jadwal->getdelete($key);
		}
		redirect('jadwal');
	}
}
