<?php
class ContactModel extends MY_Model{
	public function add_contact($data){
		$this->db->insert('tbl_contact', $data);
	}
}