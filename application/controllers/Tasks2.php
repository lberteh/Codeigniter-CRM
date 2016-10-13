<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks2 extends Super_controller {


	public function index()	{


		$this->load->model('Tasks_model');
		$this->load->model('Projects_model');
		$data['projects'] = $this->Projects_model->get_projects();
		$data['tasks']    = $this->Tasks_model->get_all_tasks()->result();
		$data['assigned_users'] = $this->Tasks_model->get_all_assigned_users()->result();
		$data['count']    = $this->Tasks_model->count_tasks();

		$this->load->view('Tasks/todo3', $data);

	}

	public function cron_job() {

		$red = 'red';

		$query_str = 'UPDATE tasks SET status = ? WHERE due_date < CURDATE();';
		$this->db->query($query_str, array($red));

	}


	public function ajax_tasks() {

		$project_id = $this->input->post('projectId');

		$this->load->model('Tasks_model');
		$users = $this->Tasks_model->get_users();

		if($project_id === 'no_id') {

			$tasks = $this->Tasks_model->get_all_tasks();

		} else {

			$tasks = $this->Tasks_model->get_tasks($project_id);

		}


		if ($tasks->num_rows() > 0) {

			$tasks_html = '';


			foreach ($tasks->result() as $task) {

				$tasks_html .= '<div class="todo-tasklist-item todo-tasklist-item-border-' . $task->status . '" id="task_click" data-tstatus="' . $task->status . '" data-tname="' . $task->task_name . '" data-projectid="' . $project_id . '" data-taskid="' . $task->task_id . '">
						<img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/' . $task->avatar . '" width="27px" height="27px">
						<div class="todo-tasklist-item-title">' . $task->task_name . '</div>
						<div class="todo-tasklist-item-text">' . $task->task_body . '</div>
						<div class="todo-tasklist-controls pull-left">
								<span class="todo-tasklist-date">
										<i class="fa fa-calendar"></i>' . $task->date_due . ' </span>
						</div>

				</div>';


 }

		} else {

			$tasks_html = '<h4>
						There are no Tasks for this Project
					</h4>';

		}

		$form_html = '<div class="form">
		<div class="form-group"><div class="col-md-8 col-sm-8"><div class="todo-taskbody-user">
		<img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/no-avatar.png" width="50px" height="50px">
		<span class="todo-username pull-left" id="assigned_to"></span>
		</div></div>	<div class="col-md-4 col-sm-4">	<div class="todo-taskbody-date pull-right"></div></div>	</div>
		<div class="form-group"><div class="col-md-12"><input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Task Title..." id="task_name"> </div></div>
		<div class="form-group"><div class="col-md-12"><textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Task Description..." id="task_body"></textarea></div></div>
		<div class="form-group" ><label class="col-md-12">Due Date</label><br><div class="col-md-5"><div id="datepicker" class="date-picker"  data-date-format="yyyy-mm-dd"></div>
		<input type="hidden" id="my_hidden_input" name="due_date"></div></div>


		<div class="form-group"><label class="col-md-12">Assign to:  </label><div class="col-md-12"><select class="form-control todo-taskbody-tags" id="task_user_id"><option value="0">Self Assign</option>';

		foreach ($users as $user):

		$form_html .=	'<option value="'. $user->user_id . '">' . $user->first_name . ' ' . $user->last_name . '</option>';

		endforeach;

		$form_html .= '</select></div></div>

		<div class="form-actions todo-form-actions"><button class="btn btn-circle btn-sm green" id="new_task_submit">Create Task</button>
		<button class="btn btn-circle btn-sm btn-default">Cancel</button></div></div>';






	 $result = array('status' => 'ok', 'html' => $tasks_html, 'form' => $form_html);

 	 echo json_encode($result);


	}

	public function ajax_task_form() {

		$task_id = $this->input->post('taskId');

		$this->load->model('Tasks_model');
		$task = $this->Tasks_model->get_task($task_id);
		$users= $this->Tasks_model->get_users();

		if ($task) {

			$tasks_html = '';

					$tasks_html = '<div class="form">
							<div class="form-group">
									<div class="col-md-8 col-sm-8">
											<div class="todo-taskbody-user">
													<img class="todo-userpic pull-left" src="http://localhost/metro/assets/pages/media/users/' . $task->avatar . '" width="50px" height="50px">
													<span class="todo-username pull-left" id="assigned_to">' . $task->name . '</span>
													<a href="tasks/assign_task/' . $task_id . '"><button type="button" class="todo-username-btn btn btn-circle btn-default btn-sm">&nbsp;edit&nbsp;</button></a>
											</div>
									</div>
									<div class="col-md-4 col-sm-4">
											<div class="todo-taskbody-date pull-right">
													<button type="button" id="mark_complete" class="todo-username-btn btn btn-circle btn-default btn-sm" data-taskid="' . $task_id . '">&nbsp; Complete &nbsp;</button>
											</div>
									</div>
							</div>
							<!-- END TASK HEAD -->
							<!-- TASK TITLE -->
							<div class="form-group">
									<div class="col-md-12">
											<input type="text" class="form-control todo-taskbody-tasktitle" placeholder="Task Title..." id="task_name" value="' . $task->task_name . '"> </div>
							</div>
							<!-- TASK DESC -->
							<div class="form-group">
									<div class="col-md-12">
											<textarea class="form-control todo-taskbody-taskdesc" rows="8" placeholder="Task Description..." id="task_body">' . $task->task_body . '</textarea>
									</div>
							</div>
							<!-- END TASK DESC -->
							<!-- TASK DUE DATE -->
							<div class="form-group" >
									<label class="col-md-12">Due Date</label><br>
									<div class="col-md-5">
											<div id="datepicker" class="date-picker" data-date="' . $task->due_date . '" data-date-format="yyyy-mm-dd"> </div>
											<input type="hidden" id="my_hidden_input" name="due_date">
									</div>
							</div>

							<div class="form-group"><label class="col-md-12">Assign to: </label><div class="col-md-12"><select class="form-control todo-taskbody-tags" id="task_user_id"><option value="' . $task->user_id . '">' . $task->name . '</option>';

							foreach ($users as $user):

							$tasks_html .=	'<option value="'. $user->user_id . '">' . $user->first_name . ' ' . $user->last_name . '</option>';

							endforeach;

							$tasks_html .= '</select></div></div>

							<div class="form-actions todo-form-actions">
									<button class="btn btn-circle btn-sm green" id="update_task">Save Changes</button>
									<button class="btn btn-circle btn-sm btn-default">Cancel</button>
							</div>
					</div>';


			 		} else {

			 			echo 'something went wrong';

			 		}


			 	 $result = array('status' => 'ok', 'html' => $tasks_html);

			  	 echo json_encode($result);

	}

	public function ajax_new_task() {

		$project_id = $this->input->post('projectId');
		$task_name  = $this->input->post('tName');
		$task_body  = $this->input->post('tBody');
		$due_date   = $this->input->post('dDate');
		$user_id    = $this->input->post('userId');

		$this->load->model('Tasks_model');
		$this->Tasks_model->create_task($project_id, $task_name, $task_body, $due_date, $user_id);

		$result = array('status' => 'ok');

		echo json_encode($result);

	}

	public function ajax_update_task() {

		$project_id = $this->input->post('projectId');
		$task_name  = $this->input->post('tName');
		$task_body  = $this->input->post('tBody');
		$due_date   = $this->input->post('dDate');
		$task_id    = $this->input->post('taskId');
		$user_id    = $this->input->post('userId');

		$this->load->model('Tasks_model');
		$this->Tasks_model->update_task($project_id, $task_name, $task_body, $due_date, $task_id, $user_id);

		$result = array('status' => 'ok');

		echo json_encode($result);

	}

	public function ajax_mark_complete() {

		$task_id = $this->input->post('taskId');

		$this->load->model('Tasks_model');
		$this->Tasks_model->mark_task_complete($task_id);

		$result = array('status' => 'ok');

		echo json_encode($result);



	}

	public function ajax_count() {

		$project_id = $this->input->post('projectId');

		$this->load->model('Tasks_model');
		$count = $this->Tasks_model->count_tasks_by_project($project_id);


			$yellow = '0';
			$red    = '0';
			$green  = '0';

			foreach ($count->result() as $c) {

				if($c->status === 'yellow') {

					$yellow = $c->count;

				}
				if($c->status === 'red') {

					$red = $c->count;

				}
				if($c->status === 'green') {

					$green = $c->count;

				}

			}

			$count_html = '<div class="todo-project-list">
					<ul class="nav nav-pills nav-stacked">
							<li>
									<a href="javascript:;" class="filter_pending">
											<span class="badge badge-warning">
												' . $yellow . '
											</span>Hide Pending </a>
							</li>
							<li>
									<a href="javascript:;" class="filter_completed2">
											<span class="badge badge-success" >
												' . $green . '
											</span>Show Completed </a>
							</li>
							<li>
									<a href="javascript:;" class="filter_overdue">
											<span class="badge badge-danger" >
												' . $red . '
											</span>Hide Overdue </a>
							</li>

					</ul>
			</div>';

			$result = array('status' => 'ok', 'html' => $count_html);

			echo json_encode($result);

	}

	public function assign_task() {

		$this->load->model('Tasks_model');


		$submit = $this->input->post('submit', TRUE);

		$task_id = $this->uri->segment(3);

		$data['task_id'] = $task_id;
		$data['users'] = $this->Tasks_model->get_users();
		$data['assigned'] = $this->Tasks_model->get_assigned_users($task_id);

		if($submit == 'assign') {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('user_id', 'User', 'required');
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

			if($this->form_validation->run() == TRUE) {

				$flash_msg = $this->_do_assign($task_id);


				$value = '<div class="alert alert-info" role="alert">'. $flash_msg .'</div>';
				$this->session->set_flashdata('user_added', $value);
				redirect('Tasks/assign_task/'.$task_id);
			} else {
				// write code
			}

		}
		if($submit == 'back') {
			redirect('Tasks');
		}

		$data['flash'] = $this->session->flashdata('user_added');
		$this->load->view('prospects/new_record_head');
		$this->load->view('header');
		$this->load->view('tasks/assign_task_view', $data);
		$this->load->view('footer2');
		$this->load->view('prospects/new_record_footer');

	}

	function _do_assign($task_id) {

			$user_id = $this->input->post('user_id', TRUE);


			$this->load->model('Tasks_model');
      $insert = $this->Tasks_model->do_assign($task_id, $user_id);
			if ($insert) {
				$flash_msg = "Task successfuly assigned to user";

			} else {
				$flash_msg = 'This task was already assigned to this user';
			}

			return $flash_msg;


		}



	function unassign($id, $task_id) {

		$this->load->model('Tasks_model');
		$this->Tasks_model->do_unassign($id, $task_id);

		$flash_msg = 'The user was successfuly unassigned from this task';
		$value = '<div class="alert alert-info" role="alert">'. $flash_msg .'</div>';
		$this->session->set_flashdata('user_added', $value);

		redirect('Tasks/assign_task/'.$task_id);

	}

	public function test() {


	$this->load->library('pagination');
	$this->load->model('Tasks_model');
	$this->load->model('Projects_model');
	$data['projects'] = $this->Projects_model->get_projects();
	$data['tasks']    = $this->Tasks_model->get_all_tasks()->result();
	$data['assigned_users'] = $this->Tasks_model->get_all_assigned_users()->result();
	$data['count']    = $this->Tasks_model->count_tasks();

//	$this->load->model('s_model');



	/*Pagination*/
	$config['base_url'] = 'http://localhost/metro/Tasks/test/s';
	$config['total_rows'] = 50;
	$config['per_page'] = 5;
	$config['num_links'] = 5;

	/*Pagination*/

	//$data['row'] = $this->db->get('s_data',$config['per_page'], $this->uri->segment(3))->result();

	$data['row'] = $this->Tasks_model->get_all_tasks($config['per_page'], $this->uri->segment(3))->result();

	$this->pagination->initialize($config);





				$this->load->view('Tasks/todo3', $data);

 }



}
