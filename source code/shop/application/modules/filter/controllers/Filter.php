<?php 
class Filter extends MY_Controller {
 	public function index(){	
    	$data = [
			//template variable contains layouts of this action
			//A template = name of controller + name of action
			//For examplte, Product Controller, index action => '/product/index'
			'template' => '/search_form',
			'title' => 'Filter form'
		];
        $this->load->view('layout/app', $data);
    }

    function filter_keyword($cat_id=1){	
    	$this->load->model('FilterModel');
       // $cat    =   $this->input->post('category');
        $data['results']  =  $this->FilterModel->get_product_by_cat($cat_id);
        $data['template'] = '/Filter_Result';
        $this->load->view('layout/app', $data);
    }

    


}