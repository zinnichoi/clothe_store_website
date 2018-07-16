<?php

/**
 * Class Home 
 *
 */
class HomeModel extends MY_Model{
	/**
	 * get all latest products in database for homepage
	 */
	public function show_latest_product($number = 8) {
		$query = $this->db->select('*')->from('tbl_product')->order_by('time', 'DESC')->limit($number)->get();
	    return $query->result_array();
	}

}