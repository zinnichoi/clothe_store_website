<?php
class Contact extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('ContactModel');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/contact/contact_index',
			'contacts' => $this->ContactModel->get_contact(),
			'title' => 'Admin page - manage contact'
		];
    	$this->load->view('layout/adminApp', $data);
	}
}
