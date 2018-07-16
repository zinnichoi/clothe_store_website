<?php 
class AboutUsModel extends MY_Model
{
	public function get_aboutUs(){
	    $this->db->select('*');
	    $this->db->from('tbl_aboutus');
	    $query = $this->db->get();
	    return $query->result_array();
	 }

// to do
	 public function get_aboutUs_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_aboutus');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function update_aboutUs($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tbl_aboutus',$data);
	}
}