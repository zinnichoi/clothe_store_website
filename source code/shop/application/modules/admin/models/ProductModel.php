<?php 
class ProductModel extends MY_Model
{
	public function get_product(){
	    $this->db->select('*');
	    $this->db->from('tbl_product');
	    $this->db->order_by('product_id', "esc");
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	 public function get_product_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function delete_product($id){
		$this->db->where('product_id', $id);
		$this->db->delete('tbl_product');
	}

	public function update_product($id,$data){
		$this->db->where('product_id',$id);
		$this->db->update('tbl_product',$data);
	}

	public function add_product($data){
		$this->db->insert('tbl_product', $data);
	}

	public function filter_product($num){
		if ($num == 0) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('product_id', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 1) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('product_id', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 2) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('product_price', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 3) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('product_price', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 4) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('time', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 5) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('time', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 6) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('cat_id', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 7) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('cat_id', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
	}
}