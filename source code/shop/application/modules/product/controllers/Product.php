<?php
class Product extends MY_Controller{

	public function index(){
		$data = [
			'template' => '/product/index',
			'title' => 'All products in store'
		];

		//Load models
		$this->load->model('ProductModel');

		//Get data
    	$data['list_product'] = $this->ProductModel->get_list_product();

		//Load view
    	$this->load->view('layout/app', $data);
	}

	public function get_product_by_cat($cat_id = 1){
		$data = [
			'template' => '/product/index',
			'title' => 'products by cat in store'
		];

		//Load models
		$this->load->model('ProductModel');

		//Get data
    	$data['list_product'] = $this->ProductModel->get_product_by_cat($cat_id);

		//Load view
    	$this->load->view('layout/app', $data);
	}

	public function get_product_by_id($product_id=1){
		$data = [
			'template' => '/product/detail',
			'title' => 'product detail in store'
		];

		//Load models
		$this->load->model('ProductModel');

		//Get data
    	$data['list_product'] = $this->ProductModel->get_product_by_id($product_id);

		//Load view
    	$this->load->view('layout/app', $data);
	}

	public function filter($num){
		$this->load->model('ProductModel');
		$data = [
			'template' => '/product/index',
			'list_product' => $this->ProductModel->filter_product($num),
			'title' => 'Filter product'
		];
    	$this->load->view('layout/app', $data);
	}
}