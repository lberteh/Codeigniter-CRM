<?php

class Register_model extends CI_Model{

  public function register_user() {

    $options = ['cost' => 12];

    $encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

    $data = array(

      'first_name' => $this->input->post('first_name'),
      'last_name'  => $this->input->post('last_name'),
      'email'      => $this->input->post('email'),
      'password'   => $encrypted_pass,
      'admin'      => $this->input->post('admin')

    );

    $insert_data = $this->db->insert('users', $data);

    return $insert_data;

  }


}
