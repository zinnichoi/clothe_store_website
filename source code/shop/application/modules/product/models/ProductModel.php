<?php
class ProductModel extends MY_Model
{
	public function get_list_product(){
		$query = $this->db->select('*')->from('tbl_product')->get();
    	return $query->result_array();
	}

	public function get_product_by_cat($cat = 0){
		$query = $this->db->select('*')->from('tbl_product')->where('cat_id=',$cat)->get();
		return $query->result_array();
	}

	public function get_product_by_id($id = 0){
		$query = $this->db->select('*')->from('tbl_product')->where('product_id=',$id)->get();
		return $query->result_array();
	}

	public function filter_product($num){
		if ($num == 0) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('product_price', "esc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
		if ($num == 1) {
			$this->db->select('*');
		    $this->db->from('tbl_product');
		    $this->db->order_by('product_price', "desc");
		    $query = $this->db->get();
		    return $query->result_array();
		}
	}
}