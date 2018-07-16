<?php 
class OrderModel extends MY_Model
{
	public function get_order(){
	    $this->db->select('*');
	    $this->db->from('tbl_order');
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

	public function update_order($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tbl_order',$data);
	}

	public function add_order($data){
		$this->db->insert('tbl_order', $data);
	}
}