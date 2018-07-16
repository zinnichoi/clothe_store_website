<?php
class Customer extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('CustomerModel');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/customer/customer_index',
			'customers' => $this->CustomerModel->get_customer(),
			'title' => 'Admin page'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function delete_customer_by_id(){
		if($this->input->get('rowid')){
			$this->CustomerModel->delete_customer_by_id($this->input->get('rowid'));
			$uri = base_url()."admin/customer";
		  	echo "<script>javascript:alert('"."Delete successfully"."'); window.location = '".$uri."'</script>";
		}
		redirect('/admin/customer','refresh');
	}

	public function filter($num){
		$data = [
			'template' => '/customer/customer_index',
			'customers' => $this->CustomerModel->filter_customer($num),
			'title' => 'Admin page - manage customer'
		];
    	$this->load->view('layout/adminApp', $data);
	}

}
