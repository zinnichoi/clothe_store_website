<?php
class CartModel extends My_Model{
	public function get_detail_productId($id){
		$query = $this->db->select('*')->from('tbl_product')->where('product_id=',$id)->get();
		return $query->row_array();
	}
}