<?php
class User_model extends CI_Model{
    public function __construct()
   {
      $this->primary_key = "user_id";
      $this->table_name = "users";
   }

    function create()
    {
        $data = array(
            "name"=> $this->input->post("name"),
            "email" => $this->input->post("email")
        );
        $this->db->insert('users', $data);
    }
    function all(){
        return $users=$this->db->get('users')->result_array();
    }
    function getUser($userId)
    {
       $this->db->where('user_id',$userId);
       return $user = $this->db->get('users')->row_array();
   }
}  



?>