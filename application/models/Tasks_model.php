<?php

class Tasks_model extends CI_Model {

  public function get_all_tasks() {

    $query_str = "SELECT *, DATE_FORMAT(due_date,'%d %b %Y') AS date_due, avatar
                  FROM tasks
                  LEFT JOIN users ON tasks.user_id = users.user_id
                  ORDER BY due_date";

    $result = $this->db->query($query_str);

             return $result;


  }

  public function get_all_assigned_users() {

    $query_str = "SELECT tasks_users.user_id, task_id, avatar, first_name, last_name
                  FROM tasks_users
                  LEFT JOIN users ON tasks_users.user_id = users.user_id";
                  

    $result = $this->db->query($query_str);

             return $result;


  }

  public function get_tasks($projectId) {

    $query_str = "SELECT *, DATE_FORMAT(due_date,'%d %b %Y') AS date_due, avatar
                  FROM tasks
                  LEFT JOIN users ON tasks.user_id = users.user_id
                  WHERE project_id = ?
                  ORDER BY date_due";

    $result = $this->db->query($query_str, array($projectId));

             return $result;


  }

  public function get_users() {

    $this->db->order_by('first_name');

    $result = $this->db->get('users');

    return $result->result();

  }

  public function create_task($project_id, $task_name, $task_body, $due_date, $user_id) {

    $data1 = array(

      'task_name'  =>  $task_name,
      'task_body'  =>  $task_body,
      'project_id' =>  $project_id,
      'due_date'   =>  $due_date,
      'status'     =>  'yellow',
      'user_id'    =>  $this->session->userdata('user_id')

    );

    $data2 = array(

      'task_name'  =>  $task_name,
      'task_body'  =>  $task_body,
      'project_id' =>  $project_id,
      'due_date'   =>  $due_date,
      'status'     =>  'yellow',
      'user_id'    =>  $user_id

    );

    if ($user_id == 0) {
      $insert = $this->db->insert('tasks', $data1);
    } else {
      $insert = $this->db->insert('tasks', $data2);
    }



  }

  public function update_task($project_id, $task_name, $task_body, $due_date, $task_id, $user_id) {

    $data = array(

      'task_name'  =>  $task_name,
      'task_body'  =>  $task_body,
      'project_id' =>  $project_id,
      'due_date'   =>  $due_date,
      'status'     =>  'yellow',
      'user_id'    =>  $user_id

    );
    $this->db->where('task_id', $task_id);
    $this->db->update('tasks', $data);

  }

  public function mark_task_complete($task_id) {

    $data = array(

      'status'     =>  'green',

    );

    $this->db->where('task_id', $task_id);
    $this->db->update('tasks', $data);


  }

  public function get_task($task_id) {

    $query_str = 'SELECT *, CONCAT(first_name," " , last_name) AS name
                  FROM tasks
                  LEFT JOIN users ON tasks.user_id = users.user_id
                  WHERE tasks.task_id = ?';

    $result = $this->db->query($query_str, array($task_id));

    return $result->row();

  }

public function count_tasks() {

  $query_str = 'SELECT status, count(task_id) AS count
                FROM tasks
                GROUP BY status';

  $result = $this->db->query($query_str);

  return $result;

}

public function count_tasks_by_project($project_id) {

  if($project_id === "no_id") {

    $query_str = 'SELECT status, count(task_id) AS count
                  FROM tasks
                  GROUP BY status';

    $result = $this->db->query($query_str);

    return $result;

  } else {

    $query_str = 'SELECT status, count(task_id) AS count
                  FROM tasks
                  WHERE project_id = ?
                  GROUP BY status';

    $result = $this->db->query($query_str, array($project_id));

    return $result;

  }



}

public function get_assigned_users($task_id) {

  $query_str = 'SELECT id, task_id, tasks_users.user_id, first_name, last_name
                FROM tasks_users
                LEFT JOIN users ON users.user_id = tasks_users.user_id
                WHERE task_id = ?';

  $result = $this->db->query($query_str, array($task_id));

  return $result;

}

public function do_assign($task_id, $user_id) {

  $data = array(

    'task_id'  =>  $task_id,
    'user_id'  =>  $user_id

  );

  $query_str = 'SELECT EXISTS(SELECT 1 FROM tasks_users WHERE task_id = ? AND user_id = ?) as exist';
  $result = $this->db->query($query_str, array($task_id, $user_id));
  $exists = $result->row();



  if ($user_id == 0) {
    echo 'Something went wrong, please contact lucas.berte@muv-u.com if the error persists'; die();
  }
  if ($exists->exist == 1) {
    return FALSE;
  }
  else {

    $insert = $this->db->insert('tasks_users', $data);

    return $this->db->affected_rows() > 0;

    }



}

public function do_unassign($id) {

  $query_str = 'DELETE FROM tasks_users
                WHERE id = ?';

  $result = $this->db->query($query_str, array($id));

  return $result;

}



}
