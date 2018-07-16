<?php 
class ContactModel extends MY_Model
{
	public function get_contact(){
	    $this->db->select('*');
	    $this->db->from('tbl_contact');
	    $query = $this->db->get();
	    return $query->result_array();
	 }
}