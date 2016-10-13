<?php

class Login_model extends CI_Model{

  public function login_user($email, $password) {

    $this->db->where('email', $email);

  //  $result = $this->db->get('users');

    $query = $this->db->get('users');



    $db_password = $query->row()->password;

    if(password_verify($password, $db_password)) {

    //  return $result->row(0);

    return $query->row();

    } else {

      return false;

    }

  }

}
