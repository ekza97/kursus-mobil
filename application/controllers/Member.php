<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jayapura');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('username')){
			redirect('login');
		}
		$this->load->model('Member_m');
	}
	
	public function index()
	{
		$data['home'] = true;
		$data['content'] = 'member/form';
		$this->load->view('home',$data);
	}

	public function add(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 2048;
		$config['encrypt_name']         = TRUE;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('member_ktp'))
		{
			$this->session->set_flashdata('error',$this->upload->display_errors());
			redirect('member');
		}
		else
		{
			$ktp = $this->upload->data();
			$data = [
				'member_nik'=>$this->input->post('member_nik',true),
				'member_nama'=>$this->input->post('member_nama',true),
				'member_tmp_lahir'=>$this->input->post('member_tmp_lahir',true),
				'member_tgl_lahir'=>$this->input->post('member_tgl_lahir',true),
				'member_jk'=>$this->input->post('member_jk',true),
				'member_agama'=>$this->input->post('member_agama',true),
				'member_telp'=>$this->input->post('member_telp',true),
				'member_email'=>$this->input->post('member_email',true),
				'member_alamat'=>$this->input->post('member_alamat',true),
				'member_status'=>'baru',
				'member_ktp'=>$ktp['file_name'],
				'created_at'=>time(),
				'created_by'=>$this->session->userdata('iduser'),
				'users_id'=>$this->session->userdata('iduser')
			];
			$this->Member_m->create($data);
			$this->session->set_flashdata('success','Anda telah berhasil mengisi biodata');
			redirect('member/edit/'.$this->session->userdata('iduser'));
		}
	}

	public function update($id){
		// var_dump($_FILES['member_ktp']);die;
		if($_FILES['member_ktp']['name']==""){
			$data = [
				'member_nik'=>$this->input->post('member_nik',true),
				'member_nama'=>$this->input->post('member_nama',true),
				'member_tmp_lahir'=>$this->input->post('member_tmp_lahir',true),
				'member_tgl_lahir'=>$this->input->post('member_tgl_lahir',true),
				'member_jk'=>$this->input->post('member_jk',true),
				'member_agama'=>$this->input->post('member_agama',true),
				'member_telp'=>$this->input->post('member_telp',true),
				'member_email'=>$this->input->post('member_email',true),
				'member_alamat'=>$this->input->post('member_alamat',true),
				'member_status'=>$this->input->post('member_status',true),
				'updated_at'=>time(),
				'updated_by'=>$this->session->userdata('iduser'),
				'users_id'=>$this->session->userdata('iduser')
			];
			$this->Member_m->update($data,$id);
			$this->session->set_flashdata('success','Anda telah berhasil mengubah biodata');
			redirect('member/edit/'.$this->session->userdata('iduser'));
		}else{
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 2048;
			$config['encrypt_name']         = TRUE;
	
			$this->load->library('upload', $config);
	
			if ( ! $this->upload->do_upload('member_ktp'))
			{
				$this->session->set_flashdata('error',$this->upload->display_errors());
				redirect('member/edit/'.$this->session->userdata('iduser'));
			}
			else
			{
				$ktp = $this->upload->data();
				$data = [
					'member_nik'=>$this->input->post('member_nik',true),
					'member_nama'=>$this->input->post('member_nama',true),
					'member_tmp_lahir'=>$this->input->post('member_tmp_lahir',true),
					'member_tgl_lahir'=>$this->input->post('member_tgl_lahir',true),
					'member_jk'=>$this->input->post('member_jk',true),
					'member_agama'=>$this->input->post('member_agama',true),
					'member_telp'=>$this->input->post('member_telp',true),
					'member_email'=>$this->input->post('member_email',true),
					'member_alamat'=>$this->input->post('member_alamat',true),
					'member_status'=>$this->input->post('member_status',true),
					'member_ktp'=>$ktp['file_name'],
					'updated_at'=>time(),
					'updated_by'=>$this->session->userdata('iduser'),
					'users_id'=>$this->session->userdata('iduser')
				];
				$this->Member_m->update($data,$id);
				$this->session->set_flashdata('success','Anda telah berhasil mengisi formulir');
				redirect('member/edit/'.$this->session->userdata('iduser'));
			}
		}
	}

	public function edit($id){
		$data['edit'] = true;
		$data['member'] = $this->Member_m->getDataByUser($id);
		$data['home'] = true;
		$data['content'] = 'member/form';
		$this->load->view('home',$data);
	}

	

}

/* End of file Member.php */
