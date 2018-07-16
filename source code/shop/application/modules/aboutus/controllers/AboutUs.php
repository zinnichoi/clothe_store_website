
<?php


class AboutUs extends MY_Controller{
	
	public function index(){

		//Default value
		$data = [
			'template' => '/aboutus/about'
			
		];

		//Load models
		$this->load->model('AboutUsModel');

		//Get data
    	$data['list_about_us'] = $this->AboutUsModel->get_list_about_us();

		//Load view
    	$this->load->view('layout/app', $data);
	}
}
?>