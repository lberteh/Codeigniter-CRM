<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

  public function __construct() {

    parent::__construct();

    if (!$this->session->userdata('logged_in')) {

      redirect('index.php/Login');

    }

  }


	public function index()	{

    $this->load->model('Projects_model');

    $data['projects'] = $this->Projects_model->get_projects();

    $this->load->view('projects/projects_view', $data);

	}

  public function display($project_id) {

    $this->load->model('Projects_model');

    $data['project_data'] = $this->Projects_model->get_project($project_id);

    $this->load->view('projects/display_view', $data);

  }

  public function new_project() {

  //  $this->load->view('projects/new_project_view');

    $this->load->view('prospects/new_record_head');
    $this->load->view('header');
    $this->load->view('projects/new_project_view');
    $this->load->view('quick_sidebar'); // under construction
    $this->load->view('footer2');
    $this->load->view('prospects/new_record_footer');

  }

  public function create() {

    $this->load->model('Projects_model');

    $this->form_validation->set_rules('project_name', 'Email', 'trim|required');
    $this->form_validation->set_rules('project_body', 'Password', 'trim|required');

    if($this->form_validation->run() == FALSE) {

      $this->load->view('prospects/new_record_head');
      $this->load->view('header');
      $this->load->view('projects/new_project_view');
      $this->load->view('quick_sidebar'); // under construction
      $this->load->view('footer2');
      $this->load->view('prospects/new_record_footer');

    } else {

      $data = array(

        'project_user_id' => $this->session->userdata('user_id'),
        'project_name'    => $this->input->post('project_name'),
        'project_body'    => $this->input->post('project_body')

      );

      if ($this->Projects_model->create_project($data)) {

        $this->session->set_flashdata('project_created', 'Project Successfuly Created!');

        redirect('index.php/Tasks');

      }

    }

  }

  public function edit($project_id) {

    $this->load->model('Projects_model');

    $this->form_validation->set_rules('project_name', 'Email', 'trim|required');
    $this->form_validation->set_rules('project_body', 'Password', 'trim|required');

    if($this->form_validation->run() == FALSE) {

      $data['project_data'] = $this->Projects_model->get_project($project_id);

      $this->load->view('projects/edit_project_view', $data);

    } else {

      $data = array(

        'project_user_id' => $this->session->userdata('user_id'),
        'project_name'    => $this->input->post('project_name'),
        'project_body'    => $this->input->post('project_body')

      );

      if ($this->Projects_model->edit_project($project_id, $data)) {

        $this->session->set_flashdata('project_updated', 'Project Successfuly Updated!');

        redirect('index.php/Projects');

      }

    }


  }

}
