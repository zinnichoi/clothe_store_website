<?php
class Order extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('OrderModel');
		$this->load->library('session');
	}

	public function index(){
		//Default value
		$data = [
			'template' => '/order/index',
			'orders' => $this->OrderModel->get_order(),
			'title' => 'Order'
		];
    	$this->load->view('layout/app', $data);

	}

	public function update(){
		$id= $this->input->get('id');
		$data = array(
		'user_name' => $this->input->get('user_name'),
		'user_email' => $this->input->get('user_email'),
		'user_phone' => $this->input->get('user_phone'),
		'user_address' => $this->input->get('user_address'),
		'date'  => $this->input->get('date')
		);
		$this->OrderModel->update_order($id,$data);
		redirect('/cart/cart','refresh');
	}

	public function insert(){
		$sess_id = $this->session->userdata('user');
		$sess_cart = $this->session->userdata('cart');
		 $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		//Validating Name Field
		$this->form_validation->set_rules('user_name', 'user_name', 'required');

		//Validating Email Field
		$this->form_validation->set_rules('user_email', 'user_email', 'required');

		//Validating Mobile no. Field
		$this->form_validation->set_rules('user_phone', 'user_phone', 'required');

		//Validating Address Field
		$this->form_validation->set_rules('user_address', 'user_address', 'required');

		if ($this->form_validation->run() == FALSE) {
			
			$d = [
			'template' => '/order/insert',
			'title' => 'Checkout'
		];

			$this->load->view('layout/app', $d);
		} else {
		//Setting values for table columns
		$user_id = 0;
		if (!empty($sess_id)) {
			$user_id = $sess_id['id'];
		}
		$data = array(
		'total' => $this->session->userdata('order'),
		'user_id' => $user_id,
		'user_name' => $this->input->post('user_name'),
		'user_email' => $this->input->post('user_email'),
		'user_phone' => $this->input->post('user_phone'),
		'user_address' => $this->input->post('user_address'),
		'date' => date('Y-m-d H:i:s'),
		);
		$this->OrderModel->add_order($data);
		//
		$uri = base_url()."index.php";
		echo "<script>javascript:alert('"."Order successfully"."'); window.location = '".$uri."'</script>";
	}
}


}
