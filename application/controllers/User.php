<?php
class User extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('User_model');
   }

   function  create()
   {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if ($this->form_validation->run() == false) {
         $this->load->view('create');
      } else {
         // $formArray=array();
         // $formArray['name']=$this->input->post('name');
         // $formArray['email']=$this->input->post('email');
         // $formArray['created_at']=date('Y-m-d');
         $user = new User_model;
         $user->create();
         // $this->User_model->create($formArray);
         // $this->session->set_flashdata('success','Record added successfully!');
         redirect(base_url() . 'index.php/user/index');
      }
   }
}
