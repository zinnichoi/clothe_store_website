<?php
class AboutUsModel extends MY_Model
{
	public function get_list_about_us(){
		$query = $this->db->select('*')->from('tbl_aboutus')->get();
    	return $query->result_array();
	}
}