<?php 
class EmployeeModel extends MY_Model
{
	public function get_employee(){
	    $this->db->select('*');
	    $this->db->from('tbl_employee');
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	 public function get_employee_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_employee');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function delete_employee($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_employee');
	}

	public function update_employee($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tbl_employee',$data);
	}

	public function add_employee($data){
		$this->db->insert('tbl_employee', $data);
	}

	public function filter_employee($num){
		if ($num == 0) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('id', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 1) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('id', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 2) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('age', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 3) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('age', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 4) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('salary', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 5) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('salary', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 6) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('time', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 7) {
			$this->db->select('*');
		    $this->db->from('tbl_employee');
		    $this->db->order_by('time', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
	}
}