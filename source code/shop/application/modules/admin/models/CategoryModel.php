<?php 
class CategoryModel extends MY_Model
{
	public function get_category(){
	    $this->db->select('*');
	    $this->db->from('tbl_product_cat');
	    $query = $this->db->get();
	    return $query->result_array();
	 }

	 public function get_category_by_id($id){
	 	$this->db->select('*');
		$this->db->from('tbl_product_cat');
		$this->db->where('cat_id', $id);
		$query = $this->db->get();
		return $query->result_array();
	 }

	public function delete_category($id){
		$this->db->where('cat_id', $id);
		$this->db->delete('tbl_product_cat');
	}

	public function update_category($id,$data){
		$this->db->where('cat_id',$id);
		$this->db->update('tbl_product_cat',$data);
	}

	public function add_category($data){
		$this->db->insert('tbl_product_cat', $data);
	}
}