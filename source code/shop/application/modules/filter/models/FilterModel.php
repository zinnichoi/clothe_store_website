<?php 
class ProductModel extends MY_Model
{
	public function get_products($category_id = 0){
	    $this->db->select('*');
	    $this->db->from('tbl_product');

	    if ((int)$category_id > 0) {
	        $this->db->where('cat_id', $category_id);
	    }

	    $query = $this->db->get();
	    return $query->result();
	 }

	 public function get_product_by_cat($cat = 1){
		$query = $this->db->select('*')->from('tbl_product')->where('cat_id=',$cat)->get();
		return $query->result_array();
	}
}