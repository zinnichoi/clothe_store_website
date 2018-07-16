
<?php

/**
 * Note: way to access this controller in module
 * URL = domain/module name/controller name/action name
 * For example, module = post, controller = Post, action = index => URL = localhost/shop/post/post/index
 */

class Post extends MY_Controller{
	
	/** 
	 * Show all posts in database to user
	 *
	 */
	public function index(){

		//Default value
		$data = [
			//template variable contains layouts of this action
			//A template = name of controller + name of action
			//For examplte, Product Controller, index action => '/product/index'
			'template' => '/post/news'	
		];

		//Load models
		$this->load->model('PostModel');

		//Get data
    	$data['post'] = $this->PostModel->get_list_post();

		//Load view
    	$this->load->view('layout/app', $data);
	}

	public function view(){
		$data = [
			//template variable contains layouts of this action
			//A template = name of controller + name of action
			//For examplte, Product Controller, index action => '/product/index'
			'template' => '/post/detail2'	
		];

		//Load models
		$this->load->model('PostModel');

		//
		$id = $this->input->get('id');

		//Get data
    	$data['post'] = $this->PostModel->get_post_by_id($id);

		//Load view
    	$this->load->view('layout/app', $data);
		
	}
}
?>