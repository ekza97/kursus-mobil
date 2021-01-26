<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Member_m extends CI_Model {

	private $table = 'member';

	private $ID = 'idmember';

	function create($data){
		$this->db->insert($this->table,$data);
	}

	function update($data,$id){
		$this->db->update($this->table,$data,[$this->ID=>$id]);
	}

	function delete($id){
		$this->db->delete($this->table,[$this->ID=>$id]);
	}
	
	function getTotalAll(){
		return $this->db->get($this->table)->num_rows();
	}

	function getTotal($sts){
		return $this->db->get_where($this->table,['member_status'=>$sts])->num_rows();
	}

	function getAllData(){
		return $this->db->get($this->table)->result_array();
	}

	function getDataByUser($id){
		return $this->db->get_where($this->table,['users_id'=>$id])->row_array();
	}

	function getDataById($id){
		return $this->db->get_where($this->table,[$this->ID=>$id])->row_array();
	}

}

/* End of file Member_m.php */
