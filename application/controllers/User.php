<?php
class User extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('User_model');
   }
   function index(){
      
      $users=$this->User_model->all();
      $data=array();
      $data['users']=$users;
      $this->load->view("list",$data);
   }

   function  create()
   {
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if ($this->form_validation->run()== false) {
         $this->load->view('create');
      } else {
        
         $user = new User_model;
         $user->create();
         
         redirect(base_url() . 'index.php/user/index');
      }
   }
   function edit($userId){
      $this->load->model('User_model');
      $user=$this->User_model->getUser($userId);
      $data=array();
      $data['user']=$user;
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if($this->form_validation->run()==false){
         $this->load->view('edit',$data);
      }
      else{
         $user = new User_model;
         $user->updateUser($userId);
         redirect(base_url().'index.php/user/');
         
      }
   }
   function delete($userId){
      $this->load->model('User_model');
      $user=$this->User_model->getUser($userId);
   //    if(empty($user)){
   //       $this->session->set_flashdata('failure')
   //    }
   // }
    $user->deleteUser($userId);
    redirect(base_url().'index.php/user/');

   }
}
