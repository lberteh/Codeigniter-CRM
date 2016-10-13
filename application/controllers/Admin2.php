<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Super_controller {

	public function index()
	{

		if (!$this->session->userdata('admin') == 1) {
			redirect('Login/to_logout');
		}

		$startDate = $this->input->post('dStart');
	  $endDate   = $this->input->post('dEnd');

		$this->load->model('Reports_model');

		$data['columns'] = $this->Reports_model->table_report($startDate, $endDate);
//		$data['records'] = $this->test_model->table_all_records();


	  // $this->load->view('admin_view', $data);

		$this->load->view('Admin/admin_head');
		$this->load->view('header');
		$this->load->view('Admin/admin_view', $data);
		$this->load->view('quick_sidebar'); // under construction
		$this->load->view('footer2');
		$this->load->view('Admin/admin_footer');

	}

	public function records()
	{

		$this->load->model('test_model');
		$this->test_model->table_all_records();


	}

	public function test() {

		$this->load->model('Projects_model');
		$data['projects'] = $this->Projects_model->get_projects();
		$this->load->view('todo2', $data);

	}


}
