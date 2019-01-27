<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

	
	public function getlogin($u,$p,$l)
	{
		$pwd=md5($p);
		$this->db->where('nama_p',$u);
		$this->db->where('password',$pwd);
		$this->db->where('jabatan',$l);
		$query= $this->db->get('pengguna');
		if ($l=='Admin') {
			if($query->num_rows()> 0){
			foreach ($query->result() as $row ) {
				$sess = array(	
								'username'		=>$row->nama_p,
								'password'		=>$row->password,
								'level'			=>$row->level
								);
						$this->session->set_userdata($sess);
						redirect('home/hadmin');
					
			}
		}
		else{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('login');
			}
		}
		elseif ($l=='Bendahara') {
			if($query->num_rows()> 0){
			foreach ($query->result() as $row ) {
				$sess = array(	
								'username'		=>$row->nama_p,
								'password'		=>$row->password,
								'level'			=>$row->level
								);
						$this->session->set_userdata($sess);
						redirect('home/hbendahara');
					
			}
		}
		else{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('login');
		}
		}
		elseif ($l=='Pimpinan') {
			if($query->num_rows()> 0){
			foreach ($query->result() as $row ) {
				$sess = array(	
								'username'		=>$row->nama_p,
								'password'		=>$row->password,
								'level'			=>$row->level
								);
						$this->session->set_userdata($sess);
						redirect('home/hpimpinan');
					
			}
		}
		else{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('login');
		}
		}
		elseif($l=='Pendidik') {
			if($query->num_rows()> 0){
			foreach ($query->result() as $row ) {
				$sess = array(	
								'username'		=>$row->nama_p,
								'password'		=>$row->password,
								'level'			=>$row->level
								);
						$this->session->set_userdata($sess);
						redirect('home/hpendidik');
					
			}
		}
		else{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('tampilan_login');
			}
		}
		
		
		}
		
	
	public function anti_xss($source){
		$f = stripslashes(strip_tags(htmlspecialchars($source,ENT_QUOTES)));
		return $f;
	}
	}


