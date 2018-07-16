<?php
class Category extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('CategoryModel');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/category/category_index',
			'categorys' => $this->CategoryModel->get_category(),
			'title' => 'Admin page - manage category'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function delete(){
		if($this->input->get('rowid')){
			$this->CategoryModel->delete_category($this->input->get('rowid'));
			$uri = base_url()."admin/category";
		  	echo "<script>javascript:alert('"."Delete successfully"."'); window.location = '".$uri."'</script>";
		}
		redirect('/admin/category','refresh');
	}

	public function insert(){
		if ($this->input->post("btnadd")) {
	      	$data["cat_title"] = $this->input->post("cat_title");
	        $this->CategoryModel->add_category($data);
	        $uri = base_url()."admin/category";
		  	echo "<script>javascript:alert('"."Add successfully"."'); window.location = '".$uri."'</script>";
	    }
	    $d = [
				'template' => '/category/category_insert',
				'title' => 'Admin page - insert category'
			];
		$this->load->view('layout/adminApp', $d);
	}

	public function update($id){
		$d = [
			'template' => '/category/category_update',
			'category' => $this->CategoryModel->get_category_by_id($id),
			'title' => 'Admin page - update category'
		];
		if ($this->input->post("btnUpdate")) {
	      $data["cat_title"] = $this->input->post("cat_title");
	      $this->CategoryModel->update_category($id,$data);
	      $uri = base_url()."admin/category";
		  	echo "<script>javascript:alert('"."Update successfully"."'); window.location = '".$uri."'</script>";
	    }
    	$this->load->view('layout/adminApp', $d);
	}
}
