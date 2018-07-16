<?php
class AdminAccount extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('AdminAccountModel');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/adminAccount/adminAccount_index',
			'accounts' => $this->AdminAccountModel->get_account(),
			'title' => 'Admin page - manage admin account'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function delete(){
		if($this->input->get('rowid')){
			$this->AdminAccountModel->delete_account($this->input->get('rowid'));
			$uri = base_url()."admin/adminAccount";
			echo "<script>javascript:alert('"."Delete successfully"."'); window.location = '".$uri."'</script>";
		}
		redirect('/admin/adminAccount','refresh');

	}

	public function insert(){
		if ($this->input->post("btnadd")) {
	      $data["username"] = $this->input->post("username");
	      $data["password"] = $this->input->post("password");
	      $data["name"] = $this->input->post("name");
	      $data["mail"] = $this->input->post("mail");
	      $data["address"] = $this->input->post("address");

	      if (!empty($_FILES['picture']['name'])) {
	        $config['upload_path'] = './public/images';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['picture']['name'];

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('picture')) {
	          $uploadData = $this->upload->data();
	          $data["thumb"] = $uploadData['file_name'];
	        } else{
	          $data["thumb"] = '';
	        }
	      }else{
	        $data["thumb"] = '';
	      }

	      $data["about"] = $this->input->post("about");
	      $data["time"] = date('Y-m-d H:i:s');
	        $this->AdminAccountModel->add_account($data);

	       $uri = base_url()."admin/adminAccount";
			echo "<script>javascript:alert('"."Add successfully"."'); window.location = '".$uri."'</script>";

	    }
	    $d = [
				'template' => '/adminAccount/adminAccount_insert',
				'title' => 'Admin page - insert admin'
			];
		$this->load->view('layout/adminApp', $d);
	}
}
