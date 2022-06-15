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
}



?>