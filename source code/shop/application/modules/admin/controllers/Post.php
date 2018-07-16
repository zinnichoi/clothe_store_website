<?php
class Post extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('PostModel');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/post/post_index',
			'posts' => $this->PostModel->get_post(),
			'title' => 'Admin page - manage post'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function filter($num){
		$data = [
			'template' => '/post/post_index',
			'posts' => $this->PostModel->filter_post($num),
			'title' => 'Admin page - manage post'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function delete(){
		if($this->input->get('rowid')){
			$this->PostModel->delete_post($this->input->get('rowid'));
			$uri = base_url()."admin/post";
		  	echo "<script>javascript:alert('"."Delete successfully"."'); window.location = '".$uri."'</script>";
		}
		redirect('/admin/post','refresh');
	}

	public function update($id){
		$d = [
			'template' => '/post/post_update',
			'post' => $this->PostModel->get_post_by_id($id),
			'title' => 'Admin page - update post'
		];
		if ($this->input->post("btnUpdate")) {
	      $data["post_title"] = $this->input->post("post_title");
	      $data["post_desc"] = $this->input->post("post_desc");

	      if (!empty($_FILES['picture']['name'])) {
	        $config['upload_path'] = './public/images/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['picture']['name'];

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('picture')) {
	          $uploadData = $this->upload->data();
	          $data["post_thumb"] = $uploadData['file_name'];
	        } else{
	          $data["post_thumb"] = $d['post'][0]["post_thumb"];
	        }
	      }else{
	        $data["post_thumb"] = $d['post'][0]["post_thumb"];
	      }

	      $data["post_detail"] = $this->input->post("post_detail");
	      $data["time"] = date('Y-m-d H:i:s');
	      $this->PostModel->update_post($id,$data);
	      $uri = base_url()."admin/post";
		  	echo "<script>javascript:alert('"."Update successfully"."'); window.location = '".$uri."'</script>";
	    }
    	$this->load->view('layout/adminApp', $d);
	}

	public function insert(){
	    if ($this->input->post("btnadd")) {
	      $data["post_title"] = $this->input->post("post_title");
	      $data["post_desc"] = $this->input->post("post_desc");

	      if (!empty($_FILES['picture']['name'])) {
	        $config['upload_path'] = './public/images/';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['picture']['name'];

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('picture')) {
	          $uploadData = $this->upload->data();
	          $data["post_thumb"] = $uploadData['file_name'];
	        } else{
	          $data["post_thumb"] = '';
	        }
	      }else{
	        $data["post_thumb"] = '';
	      }

	    $data["post_detail"] = $this->input->post("post_detail");
	    $data["time"] = date('Y-m-d H:i:s');

	        $this->PostModel->add_post($data);
	        $uri = base_url()."admin/post";
		  	echo "<script>javascript:alert('"."Add successfully"."'); window.location = '".$uri."'</script>";
	    }
	    $d = [
				'template' => '/post/post_insert',
				'title' => 'Admin page - insert post'
			];
		$this->load->view('layout/adminApp', $d);
  }
}
