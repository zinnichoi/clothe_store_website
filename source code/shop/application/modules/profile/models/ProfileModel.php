<?php
class ProfileModel extends MY_Model{
	public function get_profile(){
	    $this->db->select('*');
	    $this->db->from('tbl_customer');
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	public function get_profile_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_customer');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function update_profile($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tbl_customer',$data);
	}
}
