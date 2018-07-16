<?php 
class Search_model extends MY_Model {
    function search($keyword='default')
    {
		$query = $this->db->like('product_title', $keyword)->get('tbl_product');
    	return $query->result_array();

    	$this->db->order_by('lname', 'asc'); //order records by last name
		$this->db->limit($limit, $start);

		$this->db->where('faculty', $search_faculty);
		$query = $this->db->get('expertise');
    }
}