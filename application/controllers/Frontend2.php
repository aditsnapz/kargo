<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend2 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_berita');
		$this->load->model('model_pegawai');
		$this->load->model('model_products');
		$this->load->model('model_logindaftar2');
		$this->load->model('Model_peserta');
	}
	public function index()
	{	
		$isi['content']	='frontendview/content_home2';
		$isi['data'] 	=$this->model_berita->all();
		$data['products']	= $this->model_products->all();
		$this->load->view('frontendview/tampilan_frontend2',$isi);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Frontend2');
	}
	public function kursus(){
		$isi['content']	='frontendview/kursus/kursus';
		$isi['sidebar'] 	='frontendview/sidebar';
		$isi['data'] 	=$this->model_berita->all();
		$this->load->view('frontendview/tampilan_frontend',$isi);
	}
	public function lihat(){
		$isi['content']		='frontendview/lihat_berita';
		$isi['sidebar'] 	='frontendview/sidebar2';

		$key =$this->uri->segment(3); 
		$this->db->where('id',$key);
		$query = $this->db->get('berita');
		$isi['data'] 		= $query;
		$isi['dataisi'] = $this->model_berita->all1();
		$this->load->view('frontendview/tampilan_frontend2',$isi);
	}

	public function simpan(){
		$this->load->model('model_berita');
		date_default_timezone_set('Asia/Jakarta');
		$id_tamu=0;
  		$query = $this->db->get('buku_tamu');
      	if ($query->num_rows()>0) {
        	foreach($query->result() as $row ){
          	$id_tamu++;
        	}
      	}
		$data['id_tamu']	= $id_tamu+1;
		$data['nama']		= $this->input->POST('nama');
		$data['email']		= $this->input->POST('email');
		$data['pesan']		= $this->input->POST('pesan');
		$data['tgl']		= date('d-m-Y');
		$data['waktu']		= date('H:i:s');
		$this->model_berita->tamu($data);
		redirect('Frontend2');
		
		
	}

	public function save(){
	$id=0;
	$query = $this->db->get('tabel_kons');
			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$id++;
				}
			}
	$data['id_kons']		= $id+1;
	$data['nama_kons']		= $this->input->post('nama_kons');
	$data['password']		= md5($this->input->post('password'));
	$data['jenis_kelamin']	= $this->input->post('jenis_kelamin');
	$data['no_telp']		= $this->input->post('no_telp');
	$data['alamat_kons']	= $this->input->post('alamat_kons');
	$this->Model_peserta->getinsert($data);

	$isi['content']			='frontendview/content_home2';
	$isi['sidebar'] 		='frontendview/sidebar2';
	$isi['data'] = $this->model_berita->all();
	
	$this->load->view('frontendview/tampilan_frontend2',$isi);
	}

	public function getlogindaftar(){
		
		$u = $this->input->POST('nama_kons');
		$p = $this->input->POST('password');
		$cek = $this->model_logindaftar2->getlogin($u,$p);
		$isi['content']		='frontendview/login2/login';
		$isi['sidebar'] 	='frontendview/sidebar2';
		$isi['data']		= $this->model_logindaftar2->getdata($u);
		if ($cek==true) {
			$this->load->view('frontendview/tampilan_frontend2',$isi);
		}
		else{
			redirect('Frontend2');
		}
		
	}
		public function add_to_cart($product_id)
 	{
 		$product = $this->model_products->find($product_id);
 		$data = array(
 					   'id'      => $product->id_barang,
 					   'qty'     => 1,
 					   'price'   => $product->harga_barang,
 					   'name'    => $product->nama_barang
 					);


 		$this->cart->insert($data);
 		redirect('frontend');
 	}
 		public function our_perfume()
	{
		$data['products']	= $this->model_products->all();
		$isi['content']		='frontendview/login2/login';
		$isi['sidebar'] 	='frontendview/sidebar2';
		$this->load->view('frontendview/tampilan_frontend2',$isi);

	}
	public function add_to_cart2($product_id)
 	{
 		$product = $this->model_products->find($product_id);
 		$data = array(
 					   'id'      => $product->id_barang,
 					   'satuan'	 => $product->satuan,
 					   'qty'     => 1,
 					   'price'   => $product->harga_barang,
 					   'name'    => $product->nama_barang
 					);

 		$this->cart->insert($data);
 		redirect('Frontend2/our_perfume');
 	}

 	public function cart(){
 		$this->load->view('frontendview/login2/Show_cart');
 	}

 	public function clear_cart()
 	{
 		$this->cart->destroy();
 		redirect('Frontend2/cart');
 	}
 	public function order()
 	{
 		$id=0;
	$query = $this->db->get('tabel_nota');
			if ($query->num_rows()>0) {
				foreach($query->result() as $row ){
					$id++;
				}
			}
	$date = date('d-m-Y');
	$data['id_nota']		= $id+1;
	$data['tgl_nota']		= $date;
	$data['id_kons']		= 1;
	$data['total_nota']		= $this->input->post('total');
	$data['status']			= "Belum_Terbayar";
	$data['note']			= "Belum_Terbayar";
	$this->model_products->insert($data);
 	}
	
}

