<?php
class Order extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('OrderModel');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/order/order_index',
			'orders' => $this->OrderModel->get_order(),
			'title' => 'Admin page - manage order'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function update($id){
		$d = [
			'template' => '/order/order_update',
			'order' => $this->OrderModel->get_order_by_id($id),
			'title' => 'Admin page - update order'
		];
		if ($this->input->post("btnUpdate")) {
	      $data["status"] = $this->input->post("status");
	      $this->OrderModel->update_order($id,$data);
	      $uri = base_url()."admin/order";
		  echo "<script>javascript:alert('"."Update successfully"."'); window.location = '".$uri."'</script>";
	    }
    	$this->load->view('layout/adminApp', $d);
	}

	public function delete(){
		if($this->input->get('rowid')){
			$this->OrderModel->delete_order($this->input->get('rowid'));
			$uri = base_url()."admin/order";
			echo "<script>javascript:alert('"."Delete successfully"."'); window.location = '".$uri."'</script>";
		}
		redirect('/admin/order','refresh');
	}

	public function filter($num){
		$data = [
			'template' => '/order/order_index',
			'orders' => $this->OrderModel->filter_order($num),
			'title' => 'Admin page - manage order'
		];
    	$this->load->view('layout/adminApp', $data);
	}

}
