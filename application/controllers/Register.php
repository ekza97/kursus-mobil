<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jayapura');

class Register extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_m');
	}
	
	public function index()
	{
		$this->load->view('register');
	}

	public function create(){
		$data = [
			'user_fullname'=>$this->input->post('user_fullname',true),
			'user_name'=>$this->input->post('user_name',true),
			'user_password'=>password_hash($this->input->post('user_password',true), PASSWORD_DEFAULT),
			'user_akses'=>'member',
			'created_at'=>time()
		];
		if($this->User_m->cekUsername($data['user_name'])==0){
			$this->User_m->create($data);
			$this->session->set_flashdata('success','Anda berhasil membuat akun');
			redirect('login');
		}else{
			$this->session->set_flashdata('error','Maaf username telah digunkan');
			redirect('register');
		}
	}
}

/* End of file Register.php */