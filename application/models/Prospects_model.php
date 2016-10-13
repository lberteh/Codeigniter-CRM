<?php

class Prospects_model extends CI_Model{

  // Used when business is not in the system, it's the first contact
  public function add_prospect() {

    $b_n = $this->input->post('b_name');

    $b_name = array('b_name' => $this->input->post('b_name') );

    $this->db->where('b_name', $b_n);

    if($this->db->get('business')->num_rows() > 0) {

      echo "Business already contacted";


    } else {

      $b_data = array(

        'b_name'      => $b_n,
        'ini_contact' => $this->input->post('type_id')

      );

      $this->db->insert('business', $b_data);

      $b_n = $this->input->post('b_name');
      $this->db->where('b_name', $b_n);
      $query = $this->db->get('business');

      $b_id = $query->row(0)->b_id;

      $data = array(

        'user_id'     => $this->session->userdata('user_id'),
        'b_id'        => $b_id,
        'type_id'     => $this->input->post('type_id'),
        'out_id'      => $this->input->post('out_id'),
        'entry_date'  => $this->input->post('entry_date'),
        'notes'       => $this->input->post('notes')

      );

      $this->db->insert('entries', $data);

      redirect('index.php/Prospects');

    }

  }

  // New record for business already in the system
  public function add_record() {

    $b_n = $this->input->post('b_name');
    $this->db->where('b_name', $b_n);
    $query = $this->db->get('business');

    $b_id = $query->row(0)->b_id;

    $data = array(

      'user_id'     => $this->session->userdata('user_id'),
      'b_id'        => $b_id,
      'type_id'     => $this->input->post('type_id'),
      'out_id'      => $this->input->post('out_id'),
      'entry_date'  => $this->input->post('entry_date'),
      'notes'       => $this->input->post('notes')

    );

    $this->db->insert('entries', $data);

    redirect('index.php/Prospects');

  }

  // retrieves latest entry for each business
  public function get_records() {

     $this->db->where('`entry_id` IN (SELECT MAX(`entry_id`) FROM `entries` GROUP BY `b_id`)', NULL, FALSE);
     $this->db->select('b_name');
     $this->db->select('entry_type');
     $this->db->select('outcome');
     $this->db->select('entries.b_id');

     $this->db->select("DATE_FORMAT(entry_date,'%b %d, %Y') AS entry_date");
     $this->db->select('notes');
     $this->db->from('entries');

     $this->db->join('type', 'type.type_id = entries.type_id');
     $this->db->join('business', 'business.b_id = entries.b_id');
     $this->db->join('outcomes', 'outcomes.out_id = entries.out_id');

     $this->db->order_by('entry_date', 'desc');

     $query = $this->db->get();

     return $query->result();

  }

  // retrieves the entries based on the business id
  public function get_entries($b_id) {

    $this->db->where('entries.b_id', $b_id);

    $this->db->select('CONCAT(first_name," " , last_name) AS name');
    $this->db->select('b_name');
    $this->db->select('entry_type');
    $this->db->select('outcome');
    $this->db->select('entries.b_id');
    $this->db->select("DATE_FORMAT(entry_date,'%b %d, %Y') AS entry_date");
    $this->db->select('notes');

    $this->db->from('entries');

    $this->db->join('type', 'type.type_id = entries.type_id');
    $this->db->join('business', 'business.b_id = entries.b_id');
    $this->db->join('outcomes', 'outcomes.out_id = entries.out_id');
    $this->db->join('users', 'users.user_id = entries.user_id');

    $this->db->order_by('entry_id');

    $query = $this->db->get();

    return $query->result();

  }


  public function get_business($b_id) {

    $this->db->where('b_id', $b_id);
    $query = $this->db->get('business');

    return $query->row();

  }

  // retrieves next step based on last action
  public function get_next_step($b_id) {

    $this->db->where('b_id', $b_id);
    $this->db->select('to_step');
    $this->db->from('entries');
    $this->db->join('outcomes', 'outcomes.out_id = entries.out_id');
    $this->db->order_by('entry_id', 'desc');
    $this->db->limit('1');
    $query = $this->db->get();

    return $query->row();

  }

  // retrieves actions based on last action performed
  public function get_actions($to_step) {

    $this->db->where('step', $to_step);


    $query = $this->db->get('type');

    return $query->result();

  }

  // this is used to retrieve all the outcomes count for each action taken
  public function get_all_outs_count() {

    // $this->db->where('type_id', '1');
    $this->db->select('entries.type_id, outcome, count(outcome) AS totals');
    $this->db->from('entries');
    $this->db->join('outcomes', 'outcomes.out_id = entries.out_id');
    $this->db->join('type', 'type.type_id = entries.type_id');
    $this->db->group_by('entries.out_id, entries.type_id');
    $this->db->order_by('type.type_id');
    $query = $this->db->get();

    return $query->result();

  }

  public function get_walk_ins_outs() {

    $this->db->select('outcome, count(outcome) AS totals');
    $this->db->from('entries');
    $this->db->join('outcomes', 'outcomes.out_id = entries.out_id');
    $this->db->group_by('entries.out_id');
    $query = $this->db->get();

    return $query->result();

  }

  public function get_first_pres_outs() {

    $this->db->where('type_id', '3');
    $this->db->select('outcome, count(outcome) AS totals');
    $this->db->from('entries');
    $this->db->join('outcomes', 'outcomes.out_id = entries.out_id');
    $this->db->group_by('entries.out_id');
    $query = $this->db->get();

    return $query->result();

  }



}
