
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_berita');
		
	}
	public function index()
	{
		$this->model_security->getsecurity();
		$isi['content']	='Tadmin/berita/tampil_berita';
		$isi['judul'] 	='Tampilan Berita';
		$isi['view'] 	='';
		$isi['menu'] 	= 'Informasi umum';
		$isi['submenu'] = 'berita';
		$query = $this->model_berita->all();
		$isi['data']	= $query;
		$this->load->view('Tadmin/tampilan_admin',$isi);
	}
	public function create(){
		$isi['content']='Tadmin/berita/form_tambahberita';
		$isi['judul'] 	='Tampilan Berita';
		$isi['view'] 	='Form Tambah berita';
		$isi['menu'] 	= 'Informasi umum';
		$isi['submenu'] = 'Berita';

		$this->form_validation->set_rules('judul','judul','trim|required');
		$this->form_validation->set_rules('subjudul','Sub Judul','required');
		$this->form_validation->set_rules('isi','Isi Berita','required');
		$this->form_validation->set_rules('tgl','Tanggal','required');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('Tadmin/tampilan_admin',$isi);
		}
		else{
			//load upload file library

		 		$config['upload_path']			='./uploads/';
                $config['allowed_types'] 		= 'gif|jpg|png|jpeg';
                $config['max_size']			    = '20000';
                $config['max_width']            = '20000';
                $config['max_height']           = '20000';
               
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
			if( ! $this->upload->do_upload('image')){
				//file gagal di upload 
				  $error = $this->upload->display_errors();
				 echo $error;
				 
			}
			else
			{
				//file berhasil di upload ->lanjut insert di query
				
				$gambar= $this->upload->data();
				$data =array(
				'judul'		=>set_value('judul'),
				'subjudul'	=>set_value('subjudul'),
				'isi'		=>set_value('isi'),
				'image'		=>$gambar['file_name'],
				'tgl'		=>set_value('tgl')
				);
				$this->model_berita->create($data);
				redirect('berita');
			}
		
		}
	}
	public function update($id){
		$this->model_security->getsecurity();
			$isi['content']='Tadmin/berita/form_editberita';
			$isi['judul'] 	='Tampilan Berita';
			$isi['view'] 	='Form edit berita';
			$isi['menu'] 	= 'Informasi umum';
			$isi['submenu'] = 'Berita';
		$this->form_validation->set_rules('judul','judul','required');
		$this->form_validation->set_rules('subjudul','subjudul','required');
		$this->form_validation->set_rules('isi','isi','required');
		$this->form_validation->set_rules('tgl','Tanggal','required');
				
			if($this->form_validation->run() == FALSE){
				$isi['data'] = $this->model_berita->find($id);
				$this->load->view('Tadmin/tampilan_admin',$isi);
			}else{
				//eksekusi query insert 
				if($_FILES['image']['name'] != ''){
				$config['upload_path']			='./uploads/';
				$config['allowed_types'] 		= 'gif|jpg|png|jpeg';
				$config['max_size']			    = '20000';
				$config['max_width']            = '20000';
				$config['max_height']           = '20000';

				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if( ! $this->upload->do_upload('image')){
					//file gagal di upload 
					$isi['data'] = $this->model_berita->find($id);
					$this->load->view('Tadmin/tampilan_admin',$isi);
					 
				}
				else
				{
					$gambar= $this->upload->data();
						$data =array(
						'judul'		=>set_value('judul'),
						'subjudul'	=>set_value('subjudul'),
						'isi'		=>set_value('isi'),
						'image'		=>$gambar['file_name'],
						'tgl'		=>set_value('tgl')
						);
					$this->model_berita->update($id,$data);
					redirect('berita');
				}
			}else{

						$data =array(
						'judul'		=>set_value('judul'),
						'subjudul'		=>set_value('subjudul'),
						'isi'		=>set_value('isi'),
						'tgl'		=>set_value('tgl')
						
						);
					$this->model_berita->update($id,$data);
					redirect('berita');
			}
		}
		
	}
	public function delete($id){
		$this->model_security->getsecurity();
		$this->model_berita->delete($id);
		redirect('berita');
	}
}
?>