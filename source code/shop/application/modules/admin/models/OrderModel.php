<?php 
class OrderModel extends MY_Model
{
	public function get_order(){
	    $this->db->select('*');
	    $this->db->from('tbl_order');
	    $this->db->order_by('date', "desc");
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	 public function get_order_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_order');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function delete_order($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_order');
	}

	public function update_order($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tbl_order',$data);
	}

	public function filter_order($num){
		if ($num == 0) {
			$this->db->select('*');
		    $this->db->from('tbl_order');
		    $this->db->order_by('date', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 1) {
			$this->db->select('*');
		    $this->db->from('tbl_order');
		    $this->db->order_by('date', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 2) {
			$this->db->select('*');
		    $this->db->from('tbl_order');
		    $this->db->order_by('status', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 3) {
			$this->db->select('*');
		    $this->db->from('tbl_order');
		    $this->db->order_by('status', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
	}

}