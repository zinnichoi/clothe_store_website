<?php
Class Register extends MY_Controller{
		public function __construct(){
		parent::__construct();
		$this->load->model(array('RegisterModel'));
	}

  function index(){
        if ($this->input->post("btnadd")) {
          $data["username"] = $this->input->post("username");
          if ($this->RegisterModel->isExist($data["username"])) {
          echo "<script>javascript:alert('User name existed !');</script>";
            $d = [
                'template' => '/register/index',
                'title' => 'Register page'
            ];
            $this->load->view('layout/app', $d);
          }else{
            $data["email"] = $this->input->post("email");
            $data["name"] = '';
            $data["age"] = '';
            $data["phoneNumber"] = '' ;
            $data["thumb"] = 'marc.jpg';
            $data["password"] = md5($this->input->post("password"));
              $this->RegisterModel->add_customer($data);
              echo "<script>javascript:alert('Register success! Please login');</script>";
              redirect('/home','refresh');
          }
        }
        $d = [
                'message' => '',
                'template' => '/register/index',
                'title' => 'Register page'
            ];
        $this->load->view('layout/app', $d);
      }
}

