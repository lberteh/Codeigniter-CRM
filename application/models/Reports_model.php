<?php

class Reports_model extends CI_Model{

  public function table_report($startDate, $endDate)
  {
    if ($startDate) {

     $this->db->where('entry_date <=', $endDate);
     $this->db->where('entry_date >=', $startDate);

     $this->db->select('CONCAT(first_name," " , last_name) AS name');
     $this->db->select('sum(case when type_id = 1 then 1 else 0 end) calls');
     $this->db->select('sum(case when type_id = 2 then 1 else 0 end) walkins');
     $this->db->select('sum((case when type_id = 2 then 1 else 0 end)+(case when type_id = 1 then 1 else 0 end)) tprospects');
     $this->db->select('sum(case when out_id = 3 then 1 else 0 end) appointments');
     $this->db->select('sum(case when type_id = 3 then 1 else 0 end) presentations');
     $this->db->select('sum(case when type_id = 6 then 1 else 0 end) followUpPres');
     $this->db->select('sum(case when out_id = 7 then 1 else 0 end) sales');
     $this->db->from('entries');
     $this->db->join('users', 'users.user_id = entries.user_id');
     $this->db->group_by('entries.user_id');
     $query = $this->db->get();

     return $query->result();

   } else {

     $this->db->where('YEAR(entry_date)', 'YEAR(NOW())', FALSE);
     $this->db->where('MONTH(entry_date)', 'MONTH(NOW())', FALSE);

     $this->db->select('CONCAT(first_name," " , last_name) AS name');
     $this->db->select('sum(case when type_id = 1 then 1 else 0 end) calls');
     $this->db->select('sum(case when type_id = 2 then 1 else 0 end) walkins');
     $this->db->select('sum((case when type_id = 2 then 1 else 0 end)+(case when type_id = 1 then 1 else 0 end)) tprospects');
     $this->db->select('sum(case when out_id = 3 then 1 else 0 end) appointments');
     $this->db->select('sum(case when type_id = 3 then 1 else 0 end) presentations');
     $this->db->select('sum(case when type_id = 6 then 1 else 0 end) followUpPres');
     $this->db->select('sum(case when out_id = 7 then 1 else 0 end) sales');
     $this->db->from('entries');
     $this->db->join('users', 'users.user_id = entries.user_id');
     $this->db->group_by('entries.user_id');
     $query = $this->db->get();

     return $query->result();

   }


  //   foreach ($query->result() as $row)
  //   {
  //       echo $row->name . ' ' . $row->tprospects;
  //       echo "<br>";
  //   }

  }

  public function calls_report()  {



     $this->db->where('YEAR(entry_date)', 'YEAR(NOW())', FALSE);
     $this->db->where('MONTH(entry_date)', 'MONTH(NOW())', FALSE);
     $this->db->where('ini_contact = 1 AND (entries.type_id = 1 OR entries.type_id = 14)');

     $this->db->select('CONCAT(first_name," " , last_name) AS name');
     $this->db->select('sum(case when out_id = 1 then 1 else 0 end) no_interest');
     $this->db->select('sum(case when out_id = 2 then 1 else 0 end) needs_fu');
     $this->db->select('sum(case when out_id = 3 then 1 else 0 end) appointments');

     $this->db->from('entries');
     $this->db->join('users', 'users.user_id = entries.user_id');
     $this->db->join('business', 'business.b_id = entries.b_id');
     $this->db->group_by('entries.user_id');
     $query = $this->db->get();

  //   return $query->result();

  //   $sql = $this->db->get_compiled_select();

//     echo $sql;



     foreach ($query->result() as $row)
     {
         echo $row->name . ' ' . $row->appointments;
         echo "<br>";
     }

  }

  public function walkins_report($startDate, $endDate)
  {
    if ($startDate) {

     $this->db->where('entry_date <=', $endDate);
     $this->db->where('entry_date >=', $startDate);
     $this->db->where('ini_contact = 2 AND (entries.type_id = 2 OR entries.type_id = 14)');

     $this->db->select('CONCAT(first_name," " , last_name) AS name');
     $this->db->select('sum(case when out_id = 1 then 1 else 0 end) no_interest');
     $this->db->select('sum(case when out_id = 2 then 1 else 0 end) needs_fu');
     $this->db->select('sum(case when out_id = 3 then 1 else 0 end) appointments');

     $this->db->from('entries');
     $this->db->join('users', 'users.user_id = entries.user_id');
     $this->db->join('business', 'business.b_id = entries.b_id');
     $this->db->group_by('entries.user_id');
     $query = $this->db->get();

     return $query->result();

   } else {

     $this->db->where('YEAR(entry_date)', 'YEAR(NOW())', FALSE);
     $this->db->where('MONTH(entry_date)', 'MONTH(NOW())', FALSE);
     $this->db->where('ini_contact = 2 AND (entries.type_id = 2 OR entries.type_id = 14)');

     $this->db->select('CONCAT(first_name," " , last_name) AS name');
     $this->db->select('sum(case when out_id = 1 then 1 else 0 end) no_interest');
     $this->db->select('sum(case when out_id = 2 then 1 else 0 end) needs_fu');
     $this->db->select('sum(case when out_id = 3 then 1 else 0 end) appointments');

     $this->db->from('entries');
     $this->db->join('users', 'users.user_id = entries.user_id');
     $this->db->join('business', 'business.b_id = entries.b_id');
     $this->db->group_by('entries.user_id');
     $query = $this->db->get();

     return $query->result();

   }

  }

  public function the_report($startDate, $endDate)  {

      $query_str = "SELECT CONCAT(first_name, ' ', last_name) AS 'name',
                    sum(case when type_id = '1' then 1 else 0 end) 'calls',
                    sum(case when type_id = '2' then 1 else 0 end) 'walkins',
                    sum((case when type_id = '2' then 1 else 0 end)+(case when type_id = '1' then 1 else 0 end)) 'tprospects',
                    sum(case when out_id = '3' then 1 else 0 end) 'appointments',
                    sum(case when type_id = '3' then 1 else 0 end) 'presentations',
                    sum(case when type_id = '6' then 1 else 0 end) 'followUpPres',
                    sum(case when out_id = '7' then 1 else 0 end) 'sales'
                    FROM entries
                    LEFT JOIN users ON users.user_id = entries.user_id
                    WHERE entry_date >= ? and entry_date <= ?
                    GROUP BY entries.user_id
                    ORDER BY entry_date";

      $result = $this->db->query($query_str, array($startDate, $endDate));

      return $result;



  }

  public function chart1() {

        $query_str1 = "SELECT entry_type AS action, count(entries.type_id) as total
                      FROM entries
                      LEFT JOIN type ON entries.type_id = type.type_id
                      WHERE YEAR(entry_date) = YEAR(NOW()) AND MONTH(entry_date) = MONTH(NOW())
                      GROUP BY entry_type
                      ORDER BY type.type_id";

        $result1 = $this->db->query($query_str1)->result();

  //      $query_str2 = "SELECT outcome AS action, count(entries.out_id) as total
  //                    FROM entries
  //                    LEFT JOIN outcomes ON entries.out_id = outcomes.out_id
  //                    WHERE YEAR(entry_date) = YEAR(NOW()) AND MONTH(entry_date) = MONTH(NOW())
  //                    GROUP BY outcome
  //                    ORDER BY outcomes.out_id";

  //      $result2 = $this->db->query($query_str2)->result();

  //      return array_merge($result1, $result2);

        return $result1;

      // echo json_encode($result->result());

  }

  public function ajx_chart1($startDate, $endDate) {

    $query_str1 = "SELECT entry_type AS action, count(entries.type_id) as total
                  FROM entries
                  LEFT JOIN type ON entries.type_id = type.type_id
                  WHERE entry_date >= ? and entry_date <= ?
                  GROUP BY entry_type
                  ORDER BY type.type_id";

    $result1 = $this->db->query($query_str1, array($startDate, $endDate))->result();

            return $result1;

  }

  public function chart1b() {

    $query_str = "SELECT outcome AS action, count(entries.out_id) as total
                  FROM entries
                  LEFT JOIN outcomes ON entries.out_id = outcomes.out_id
                  GROUP BY outcome";

    $result = $this->db->query($query_str);

    return $result;

  }

}
