<?php
class Product extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->library('form_validation');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/product/product_index',
			'products' => $this->ProductModel->get_product(),
			'title' => 'Admin page - manage product'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function filter($num){
		$data = [
			'template' => '/product/product_index',
			'products' => $this->ProductModel->filter_product($num),
			'title' => 'Admin page - manage product'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function delete(){
		if($this->input->get('rowid')){
			$this->ProductModel->delete_product($this->input->get('rowid'));
			$uri = base_url()."/admin/product";
		  	echo "<script>javascript:alert('"."Delete successfully"."'); window.location = '".$uri."'</script>";
		}
		redirect('/admin/product','refresh');
	}

	public function update($id){
		$d = [
			'template' => '/product/product_update',
			'product' => $this->ProductModel->get_product_by_id($id),
			'title' => 'Admin page - update product'
		];
		if ($this->input->post("btnUpdate")) {
	      $data["product_title"] = $this->input->post("product_title");
	      $data["product_price"] = $this->input->post("product_price");
	      $data["product_desc"] = $this->input->post("product_desc");
	      $data["product_detail"] = $this->input->post("product_detail");

	      if (!empty($_FILES['picture']['name'])) {
	        $config['upload_path'] = './public/images';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['picture']['name'];

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('picture')) {
	          $uploadData = $this->upload->data();
	          $data["product_thumb"] = $uploadData['file_name'];
	        } else{
	          $data["product_thumb"] = $d['product'][0]["product_thumb"];
	        }
	      }else{
	        $data["product_thumb"] = $d['product'][0]["product_thumb"];
	      }

	      $data["cat_id"] = $this->input->post("cat_id");
	      $data["time"] = date('Y-m-d H:i:s');
	      $this->ProductModel->update_product($id,$data);
	      $uri = base_url()."admin/product";
		  	echo "<script>javascript:alert('"."Update successfully"."'); window.location = '".$uri."'</script>";
	    }
    	$this->load->view('layout/adminApp', $d);
	}

	public function insert(){
	    if ($this->input->post("btnadd")) {
	      $data["product_title"] = $this->input->post("product_title");
	      $data["product_price"] = $this->input->post("product_price");
	      $data["product_desc"] = $this->input->post("product_desc");
	      $data["product_detail"] = $this->input->post("product_detail");

	      if (!empty($_FILES['picture']['name'])) {
	        $config['upload_path'] = './public/images';
	        $config['allowed_types'] = 'jpg|jpeg|png|gif';
	        $config['file_name'] = $_FILES['picture']['name'];

	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);

	        if ($this->upload->do_upload('picture')) {
	          $uploadData = $this->upload->data();
	          $data["product_thumb"] = $uploadData['file_name'];
	        } else{
	          $data["product_thumb"] = '';
	        }
	      }else{
	        $data["product_thumb"] = '';
	      }

	      $data["cat_id"] = $this->input->post("cat_id");
	      $data["time"] = date('Y-m-d H:i:s');
	        $this->ProductModel->add_product($data);
	        $uri = base_url()."admin/product";
		  	echo "<script>javascript:alert('"."Add successfully"."'); window.location = '".$uri."'</script>";
	    }
	    $d = [
				'template' => '/product/product_insert',
				'title' => 'Admin page - insert product'
			];
		$this->load->view('layout/adminApp', $d);
  }
}
