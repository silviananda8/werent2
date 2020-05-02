<?php
class Login_model extends CI_Model{
    //cek email dan password user
  function validate($email,$password){
    $this->db->where('EMAIL',$email);
    $this->db->where('PASSWORD',$password);
    $result = $this->db->get('user',1);
    return $result;
  }
 
}