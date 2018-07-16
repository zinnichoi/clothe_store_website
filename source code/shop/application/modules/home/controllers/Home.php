<?php
/**
 * Class Home
 */
class Home extends MY_Controller{

	/**
	 * Action index inside home controller
	 */
	public function index() {
		$this->load->library('session');

		//Load models
		$this->load->model('HomeModel', 'HomeModel');

		//Setup default value for data
		$data = [];

		//get data
	    $data['list_lated_product'] = $this->HomeModel->show_latest_product();
	    $data['template'] = '/home/index';

	    //int_r($data['list_lated_product']);

	    //Load view
	    $this->load->view('layout/app', $data);
	}
}