<?php

class Test_model extends CI_Model{

  public function test_user() {

    $this->db->where('user_id', '1');

    $result = $this->db->get('users');

    if($result->num_rows() == 1) {

      return $result->row(0);

    } else {

      return false;

    }

  }

  public function get_stuff($startDate, $endDate) {

    if ($startDate) {

     $this->db->where('entry_date <=', $endDate);
     $this->db->where('entry_date >=', $startDate);

     // $this->db->where('entry_date >=', '2016-05-21');

     $this->db->select('entry_type, count(entries.type_id) AS totals');
     $this->db->from('entries');
     $this->db->join('type', 'entries.type_id = type.type_id');
     $this->db->group_by('entries.type_id');

     $query = $this->db->get();

     // echo $query->num_rows();

     return $query->result(); // WHERE YEAR(entry_date) = YEAR(NOW()) AND MONTH(entry_date) = MONTH(NOW()) AND WEEKOFYEAR(entry_date) = WEEKOFYEAR(NOW())

   } else {

     $stDate = "YEAR(NOW())";

     // $this->db->where('entry_date >=', $stDate, FALSE);
     $this->db->where('YEAR(entry_date)', 'YEAR(NOW())', FALSE);
     $this->db->where('MONTH(entry_date)', 'MONTH(NOW())', FALSE);
     // $this->db->where('entry_date >=', '2016-05-21');

     $this->db->select('entry_type, count(entries.type_id) AS totals');
     $this->db->from('entries');
     $this->db->join('type', 'entries.type_id = type.type_id');
     $this->db->group_by('entries.type_id');

     $query = $this->db->get();

     // echo $query->num_rows();

     return $query->result();

   }


  }

  public function get_top_sellers() {

    $onde = "WHERE type_id = 7";

    $this->db->where('type_id', 7);
    $maria =  'SELECT first_name, last_name, count(type_id) AS totals
        FROM entries
        LEFT JOIN users ON entries.user_id = users.user_id
        WHERE type_id = 7
        GROUP BY entries.user_id
        ORDER BY 3 desc
        LIMIT 3';

    $query = $this->db->query($maria);

    return $query->result();

  }

  public function tester() {

    $this->db->where('type_id', 7);
    // $this->db->where('entry_date >', '2016-05-11');
    // $this->db->where('entry_date <', 'curdate()', FALSE);
    $this->db->where('entry_date >=', '$startDate');
    $this->db->where('entry_date <=', '$endDate');
    $this->db->select('first_name, last_name, count(type_id) AS totals');
    $this->db->from('entries');
    $this->db->join('users', 'users.user_id = entries.user_id');
    $this->db->group_by('entries.user_id');
    $this->db->order_by('totals', 'DESC');
    $this->db->limit(3);
    $query = $this->db->get();
//  $sql = $this->db->get_compiled_select();

//   echo $sql;

   // $result = $query->result();

   return $query->result();

 // foreach ($query->result() as $row)
// {
//     echo $row->first_name;
// }

  }

  public function the_report()
  {


     return $this->db->get('users')->result();


  }

  public function table_all_records()
  {
     $this->db->select('CONCAT(first_name," " , last_name) AS name');
     $this->db->select('entry_type');
     $this->db->select('b_name');
    // $this->db->select('DATE_FORMAT(entry_date, '%b %d %Y') AS entry_date', FALSE); "DATE_FORMAT(column_name,'%Y-%m')
     $this->db->select("DATE_FORMAT(entry_date,'%b %d, %Y') AS entry_date");
     $this->db->from('entries');
     $this->db->join('users', 'users.user_id = entries.user_id');
     $this->db->join('type', 'type.type_id = entries.type_id');
     $this->db->join('business', 'business.b_id = entries.b_id');
     $this->db->order_by('entry_date', 'DESC');
     $query = $this->db->get();

     return $query->result();


  }


}

// $query = $this->db->query(
//    'SELECT first_name, last_name, count(type_id) AS totals
//    FROM entries
//    LEFT JOIN users ON entries.user_id = users.user_id
//    WHERE type_id = 7
//    GROUP BY entries.user_id
//    ORDER BY 3 desc
//    LIMIT 3'
//);
