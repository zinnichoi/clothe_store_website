<?php
class Admin extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->model(array('LoginModel'));
	}

	public function index(){
		$sess_id = $this->session->userdata('admin'); 
		if (empty($sess_id)) {
			$this->login();
		}else{
			$data = [
			'template' => 'admin/index',
			'title' => 'Admin page'
			];
			$this->load->view('layout/adminApp', $data);
		}
	}

	public function login(){
		if ($this->input->post("btnlogin")) {
				$admin['username'] = $this->input->post('username');
				$admin['password'] = $this->input->post('password');
				$check = $this->LoginModel->validate( $admin );
				if($check){
					$this->session->set_userdata('admin', $check);
					$sess_id = $this->session->userdata('admin'); 
			      $uri = base_url()."admin/index";
				  echo "<script>javascript:alert('"."Login successfully"."'); window.location = '".$uri."'</script>";
				}
		}
			$data['template'] = 'admin/login/index';
			$data['title'] = 'Login page';
			$this->load->view('layout/loginApp', $data);
	}

	public function logout(){
		$this->session->unset_userdata('admin');
		$this->index();
	}

	public function maps(){
		$data = [
			'template' => '/maps',
			'title' => 'Admin page'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function user(){
		$data = [
			'template' => '/user',
			'title' => 'Admin page'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function noti(){
		$data = [
			'template' => '/notifications',
			'title' => 'Admin page'
		];
    	$this->load->view('layout/adminApp', $data);
	}
}
