<?php
class Contact extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('ContactModel');
	}

	public function index() {
		$data = [
			'template' => '/contact/index'
		];
	    //Load view
	    $this->load->view('layout/app', $data);
	}

	public function insert(){
	    if ($this->input->post("add")) {
	    $data["name"] = $this->input->post("name");
	    $data["email"] = $this->input->post("email");
	    $data["subject"] = $this->input->post("subject");
	    $data["phoneNumber"] = $this->input->post("phoneNumber");
	    $data["message"] = $this->input->post("message");
	    $this->ContactModel->add_contact($data);
		echo "<script>javascript:alert('Your contact sent to admin!');</script>";
	    }

	    $d = [
				'template' => '/contact/index',
				'title' => 'Contact'
			];
		$this->load->view('layout/app', $d);
  }
}