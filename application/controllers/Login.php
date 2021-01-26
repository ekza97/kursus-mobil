<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
	}
	
	public function index()
	{
		$this->load->view('login');
	}

	public function cekLogin(){
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);

		if($this->User_m->cekUsername($username)!=0){
			$row = $this->User_m->getDataByUsername($username);
			if(password_verify($password,$row['user_password'])){
				$data = [
					'iduser'=>$row['idusers'],
					'fullname'=>$row['user_fullname'],
					'username'=>$row['user_name'],
					'akses'=>$row['user_akses']
				];
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success','Selamat datang dalam sistem kami');
				if($this->session->userdata('akses')=="admin"){
					redirect('admin');
				}else{
					redirect('member');
				}
			}else{
				$this->session->set_flashdata('error','Maaf password anda salah !');
			}
		}else{
			$this->session->set_flashdata('error','Maaf username anda tidak terdaftar !');
		}
		redirect('login');
	}

	

}

/* End of file Login.php */