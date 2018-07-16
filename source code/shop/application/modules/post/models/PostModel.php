<?php
class PostModel extends MY_Model
{
	public function get_list_post(){
		$query = $this->db->select('*')->from('db_post')->get();
    	return $query->result_array();
	}

	public function get_post_by_id($post_id){
		$query = $this->db->select('*')->from('db_post')->where([
			'post_id' => $post_id
		])->get();
    	return $query->row_array();
	}
}