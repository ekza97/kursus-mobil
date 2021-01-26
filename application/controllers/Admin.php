<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect('login');
		}
		$this->load->model('Member_m');
		$this->load->model('User_m');
	}
	
	public function index()
	{
		$data['home'] = true;
		$data['jml_pendaftar'] = $this->Member_m->getTotalAll();
		$data['jml_pendaftar_baru'] = $this->Member_m->getTotal('baru');
		$data['jml_pendaftar_lama'] = $this->Member_m->getTotal('lama');
		$data['jml_pengguna'] = $this->User_m->getTotalAll();
		$data['content'] = 'dashboard';
		$this->load->view('home',$data);
	}

	public function list_member()
	{
		$data['listMember'] = true;
		$data['member'] = $this->Member_m->getAllData();
		$data['content'] = 'member/list';
		$this->load->view('home',$data);
	}

	public function hapus_member($id){
		$data = $this->Member_m->getDataById($id);
		if($data['member_ktp']!=""){
			unlink('./uploads/'.$data['member_ktp']);
		}
		$this->Member_m->delete($id);
		$this->session->set_flashdata('success','Anda telah berhasil menghapus data');
		redirect('admin/list_member');
	}
	
	public function keluar(){
		$user = $this->session->userdata('iduser');
		$this->session->sess_destroy($user);
		redirect('login');
	}

}

/* End of file Admin.php */
