<?php

class User extends CI_Controller {

    function index(){
        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list', $data);
    }

function create(){

    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
  if($this->form_validation->run() == false){
    $this->load->view('create');
  }else{
    // save record to databse

    $formArray = array();
    $formArray['Name'] = $this->input->post('name');
    $formArray['Email'] = $this->input->post('email');
    $formArray['Age'] = $this->input->post('age');

    $ff = $this->input->post('checkbox');
    $ffs = "";
    foreach($ff as $ffb){
        $ffs .=$ffb.",";
    }
    $formArray['Hobby'] = $ffs;

    $formArray['Created_at'] = date('Y-m-d');
    $this->User_model->create($formArray);
    $this->session->set_flashdata('success', 'Record added successfully !!');
    redirect(base_url().'index.php/user/index');
  }

    
}

// edit 
function edit($userId){
    $this->load->model('User_model');
    $user = $this->User_model->getUser($userId);
    $data = array();
    $data['user'] = $user;

    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    if ($this->form_validation->run()==false){
        $this->load->view('edit', $data);
    } else{
        //update record
        $formArray = array();
        $formArray['Name'] = $this->input->post('name');
        $formArray['Email'] = $this->input->post('email');
        $formArray['Age'] = $this->input->post('age');

        $ff = $this->input->post('checkbox');
        $ffs = "";
        foreach($ff as $ffb){
            $ffs .=$ffb.",";
        }
        $formArray['Hobby'] = $ffs;
    

        $this->User_model->updateUser($userId,$formArray);
        $this->session->set_flashdata('success','record updated successfully');
        redirect(base_url().'index.php/user/index');
    }



}

//delete function
function delete($userId){
    $this->load->model('User_model');
    $user = $this->User_model->getUser($userId);
    if(empty($user)){
        $this->session->set_flashdata('failure', 'Record Not Found in databse');
        redirect(base_url().'index.php/user/index');
    }
    $this->User_model->deleteUser($userId);
    $this->session->set_flashdata('success','Record Deleted Successfully');
    redirect(base_url().'index.php/user/index');

}
    
}

?>