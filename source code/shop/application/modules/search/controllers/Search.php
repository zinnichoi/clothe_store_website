<?php
class Search extends MY_Controller {
	 public function index()
    {	
    	$data = [
			//template variable contains layouts of this action
			//A template = name of controller + name of action
			//For examplte, Product Controller, index action => '/product/index'
			'template' => '/search_form',
			'title' => 'Search form'
		];
        $this->load->view('layout/app', $data);
    }

    function search_keyword()
    {	
    	$this->load->model('Search_model');
        $keyword    =   $this->input->post('keyword');
        $data['results']  =  $this->Search_model->search($keyword);
        $data['template'] = '/search_results';
        $this->load->view('layout/app', $data);
    }

}