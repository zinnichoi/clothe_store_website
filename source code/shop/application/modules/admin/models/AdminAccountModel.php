<?php 
class AdminAccountModel extends MY_Model
{
	public function get_account(){
	    $this->db->select('*');
	    $this->db->from('tbl_admin');
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	 public function get_account_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function delete_account($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_admin');
	}

	public function update_account($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tbl_admin',$data);
	}

	public function add_account($data){
		$this->db->insert('tbl_admin', $data);
	}

	public function filter_account($num){
		if ($num == 0) {
			$this->db->select('*');
		    $this->db->from('tbl_admin');
		    $this->db->order_by('id', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 1) {
			$this->db->select('*');
		    $this->db->from('tbl_admin');
		    $this->db->order_by('id', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 2) {
			$this->db->select('*');
		    $this->db->from('tbl_admin');
		    $this->db->order_by('time', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 3) {
			$this->db->select('*');
		    $this->db->from('tbl_admin');
		    $this->db->order_by('time', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
	}
}