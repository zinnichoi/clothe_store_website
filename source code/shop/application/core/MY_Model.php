<?php

/**
 * A custom class model 
 *
 */
class MY_Model extends CI_Model{
	/**
	 * Constructor
	 */
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
}