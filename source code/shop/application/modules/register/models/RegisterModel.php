<?php
Class RegisterModel extends MY_Model
{
	public function add_customer($data){
		$this->db->insert('tbl_customer', $data);
	}

	public function isExist($username){
    $this->db->select('*'); 
    $this->db->from('tbl_customer');
    $this->db->where('username', $username);
    $query = $this->db->get();
    $result = $query->result_array();
    $count = count($result);
        if ($count > 0) {
            return true;
        } else {
            return false;
        }
	}

}