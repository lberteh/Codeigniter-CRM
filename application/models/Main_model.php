<?php

class Main_model extends CI_Model{


  public function send_record() {

    $b_n = $this->input->post('b_name');

    $b_name = array('b_name' => $this->input->post('b_name') );

    $this->db->where('b_name', $b_n);

    if($this->db->get('business')->num_rows() == 0) {

      $this->db->insert('business', $b_name);

    }

    $b_n = $this->input->post('b_name');
    $this->db->where('b_name', $b_n);
    $query = $this->db->get('business');

    $b_id = $query->row(0)->b_id;

    $data = array(

      'user_id'   => $this->session->userdata('user_id'),
      'b_id'      => $b_id,
      'type_id'   => $this->input->post('type_id'),
      'entry_date'  => $this->input->post('entry_date')

    );

    $this->db->insert('entries', $data);

    redirect('main');

  }

  // Used for the jQuery UI autocomplete plugin
  function get_business($q){
    $this->db->select('b_name');
    $this->db->like('b_name', $q);
    $query = $this->db->get('business');
    if($query->num_rows() > 0){
      foreach ($query->result_array() as $row){
        $row_set[] = htmlentities(stripslashes($row['b_name'])); //build an array
      }
      echo json_encode($row_set); //format the array into json data
    }
  }
}
