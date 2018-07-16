<?php
class Login extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->model(array('LoginModel'));
	}
	
	public function index(){
		if ($this->input->post("btnlogin")) {
				$admin['username'] = $this->input->post('username');
				$admin['password'] = $this->input->post('password');
				$check = $this->LoginModel->validate( $admin );
				if($check){
					$this->session->set_userdata('admin', $check);
					$sess_id = $this->session->userdata('admin'); 
					redirect('/admin/index','refresh');
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
}