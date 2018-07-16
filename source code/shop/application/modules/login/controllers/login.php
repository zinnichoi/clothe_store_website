<?php
class Login extends MY_Controller{
	
	private $b_Check = false;
	
	public function __construct(){
		parent::__construct();
		#Tải thư viện  và helper của Form trên CodeIgniter
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
		
		#Tải model
		$this->load->model(array('LoginModel'));
	}
	
	public function index(){
		$data = [];
	    $data['template'] = 'login/login/index';
		$this->load->view('layout/app', $data);
		
	}
	
	public function login(){

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		#Kiểm tra điều kiện validate
		if($this->form_validation->run() === TRUE){
			$a_UserInfo['username'] = $this->input->post('username');
			$a_UserInfo['password'] = md5($this->input->post('password'));
			$a_UserChecking = $this->LoginModel->a_fCheckUser( $a_UserInfo );
			if($a_UserChecking){
				$this->session->set_userdata('user', $a_UserChecking);
				echo "<script>javascript:alert('Login success!n');</script>";
				redirect(base_url('home'));
			}else{
				$this->b_Check = false;
			}
		}
		$data['b_Check']= $this->b_Check;
		$data['template'] = 'login/login/index';
		$data['title'] = 'Login page';
		$this->load->view('layout/app', $data);
		
	}

	public function logout(){
		$this->session->unset_userdata('user');	// Unset session of user
		redirect(base_url('home'));
	}
	
	public function success(){
		$a_UserInfo['user'] = $this->session->userdata('user');
		$this->load->view('success', $a_UserInfo);
	}

}