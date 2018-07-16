<?php
class AboutUs extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('AboutUsModel');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/aboutUs/aboutUs_index',
			'aboutUss' => $this->AboutUsModel->get_aboutUs(),
			'title' => 'Admin page - manage about us'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function update($id){
		$d = [
			'template' => '/aboutUs/aboutUs_update',
			'aboutUs' => $this->AboutUsModel->get_aboutUs_by_id($id),
			'title' => 'Admin page - update store information'
		];
		if ($this->input->post("btnUpdate")) {
	      $data["introduction"] = $this->input->post("introduction");
	      $data["name"] = $this->input->post("name");
	      $data["contact"] = $this->input->post("contact");
	      $data["address"] = $this->input->post("address");
		  $data["more_infor"] = $this->input->post("more_infor");
	      $this->AboutUsModel->update_aboutUs($id,$data);
	      $uri = base_url()."admin/aboutUs";
		  echo "<script>javascript:alert('"."Update successfully"."'); window.location = '".$uri."'</script>";
	    }
    	$this->load->view('layout/adminApp', $d);
	}
}
