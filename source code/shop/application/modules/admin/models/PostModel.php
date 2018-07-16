<?php 
class PostModel extends MY_Model
{
	public function get_post(){
	    $this->db->select('*');
	    $this->db->from('db_post');
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	public function get_post_by_id($id){
	 	$this->db->select('*');
		$this->db->from('db_post');
		$this->db->where('post_id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function delete_post($id){
		$this->db->where('post_id', $id);
		$this->db->delete('db_post');
	}

	public function update_post($id,$data){
		$this->db->where('post_id',$id);
		$this->db->update('db_post',$data);
	}

	public function add_post($data){
		$this->db->insert('db_post', $data);
	}

	public function filter_post($num){
		if ($num == 0) {
			$this->db->select('*');
		    $this->db->from('db_post');
		    $this->db->order_by('post_id', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 1) {
			$this->db->select('*');
		    $this->db->from('db_post');
		    $this->db->order_by('post_id', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 2) {
			$this->db->select('*');
		    $this->db->from('db_post');
		    $this->db->order_by('time', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 3) {
			$this->db->select('*');
		    $this->db->from('db_post');
		    $this->db->order_by('time', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
	}
}