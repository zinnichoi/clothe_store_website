<?php 
class CustomerModel extends MY_Model
{
	public function get_customer(){
	    $this->db->select('*');
	    $this->db->from('tbl_customer');
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	 public function get_customer_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_customer');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function delete_customer_by_id($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_customer');
	}

	public function filter_customer($num){
		if ($num == 0) {
			$this->db->select('*');
		    $this->db->from('tbl_customer');
		    $this->db->order_by('id', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 1) {
			$this->db->select('*');
		    $this->db->from('tbl_customer');
		    $this->db->order_by('id', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 2) {
			$this->db->select('*');
		    $this->db->from('tbl_customer');
		    $this->db->order_by('age', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 3) {
			$this->db->select('*');
		    $this->db->from('tbl_customer');
		    $this->db->order_by('age', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
	}
}