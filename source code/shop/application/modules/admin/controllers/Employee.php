<?php
class Employee extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('EmployeeModel');
	}

	public function index(){
		$data = [
			'template' => '/employee/employee_index',
			'employees' => $this->EmployeeModel->get_employee(),
			'title' => 'Admin page'
		];
    	$this->load->view('layout/adminApp', $data);
	}

	public function delete(){
		if($this->input->get('rowid')){
			$this->EmployeeModel->delete_employee($this->input->get('rowid'));
			$uri = base_url()."admin/employee";
		  	echo "<script>javascript:alert('"."Delete successfully"."'); window.location = '".$uri."'</script>";
		}
		redirect('/admin/employee','refresh');
	}

	public function update($id){
		$d = [
			'template' => '/employee/employee_update',
			'employee' => $this->EmployeeModel->get_employee_by_id($id),
			'title' => 'Admin page - update employee'
		];
		if ($this->input->post("btnUpdate")) {
	      $data["name"] = $this->input->post("name");
	      $data["age"] = $this->input->post("age");
	      $data["phoneNumber"] = $this->input->post("phoneNumber");
	      $data["address"] = $this->input->post("address");
	      $data["salary"] = $this->input->post("salary");
	      $data["time"] = $d['employee'][0]["time"];
	      $this->EmployeeModel->update_employee($id,$data);
	      $uri = base_url()."admin/employee";
		  echo "<script>javascript:alert('"."Update successfully"."'); window.location = '".$uri."'</script>";
	    }
    	$this->load->view('layout/adminApp', $d);
	}

	public function insert(){
		if ($this->input->post("btnadd")) {
	      $data["name"] = $this->input->post("name");
	      $data["age"] = $this->input->post("age");
	      $data["phoneNumber"] = $this->input->post("phoneNumber");
	      $data["address"] = $this->input->post("address");
	      $data["salary"] = $this->input->post("salary");
	      $data["time"] = date('Y-m-d H:i:s');
	        $this->EmployeeModel->add_employee($data);
	        $uri = base_url()."/admin/employee";
		  	echo "<script>javascript:alert('"."Add successfully"."'); window.location = '".$uri."'</script>";
	    }
	    $d = [
				'template' => '/employee/employee_insert',
				'title' => 'Admin page - insert employee'
			];
		$this->load->view('layout/adminApp', $d);
	}

	public function filter($num){
		$data = [
			'template' => 'employee/employee_index',
			'employees' => $this->EmployeeModel->filter_employee($num),
			'title' => 'Admin page - manage employee'
		];
    	$this->load->view('layout/adminApp', $data);
	}
}
