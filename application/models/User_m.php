<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	private $table = 'users';

	private $ID = 'idusers';

	function create($data){
		$this->db->insert($this->table,$data);
	}

	function cekUsername($username){
		return $this->db->get_where($this->table,['user_name'=>$username])->num_rows();
	}

	function getDataByUsername($username){
		return $this->db->get_where($this->table,['user_name'=>$username])->row_array();
	}

	function getTotalAll(){
		return $this->db->get($this->table)->num_rows();
	}

}

/* End of file User_m.php */
