<?php
Class Profile  extends MY_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->library('encrypt');
    }

    public function update(){
        $userData = $this->session->userdata('user');
        $d = [
            'message' => '',
            'template' => '/profile/profile_update',
            'title' => 'Manage user profile'
        ];
        if ($this->input->post("btnUpdate")) {
          $data["username"] = $userData['username'];
          $data["email"] = $this->input->post("email");
          $data["name"] = $this->input->post("name");
          $data["age"] = $this->input->post("age");
          $data["phoneNumber"] = $this->input->post("phoneNumber");
          $data["address"] = $this->input->post("address");          

          if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = './public/images/users/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture')) {
              $uploadData = $this->upload->data();
              $data["thumb"] = $uploadData['file_name'];
            } else{
              $data["thumb"] = $userData['thumb'];
            }
          }else{
            $data["thumb"] = $userData['thumb'];
          }

          $this->ProfileModel->update_profile( $userData['id'],$data);

          // reload session
         $this->session->unset_userdata('user');

            $profileUpdated = [
            'id' => $userData['id'],
            'username' => $data["username"],
            'email' => $data["email"],
            'password' => $userData['password'],
            'name' => $data["name"],
            'age' =>$data["age"],
            'phoneNumber' => $data["phoneNumber"],
            'address' => $data["address"],
            'thumb' => $data["thumb"],
          ];
          $this->session->set_userdata('user', $profileUpdated);

          $d =[
            'template' => '/profile/profile_update',
            'message' => 'Update success!'];
            echo "<script>javascript:alert('Update success!');</script>";
          $this->load->view('layout/app', $d);
        }
        $this->load->view('layout/app', $d);
    } 
}

