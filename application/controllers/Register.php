<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Super_controller {

	public function index()
	{

		if (!$this->session->userdata('admin') == 1) {
			redirect('Login/to_logout');
		}

		$this->load->view('prospects/new_record_head');
		$this->load->view('header');
		$this->load->view('Admin/Users/register_user');

		$this->load->view('footer2');
		$this->load->view('prospects/new_record_footer');

	}

  public function to_register() {

		if (!$this->session->userdata('admin') == 1) {
			redirect('Login/to_logout');
		}

    $this->form_validation->set_rules('first_name', 'First Name'       , 'trim|required|min_length[2]');
    $this->form_validation->set_rules('last_name' , 'Last Name'        , 'trim|required|min_length[2]');
    $this->form_validation->set_rules('email'     , 'Email'            , 'trim|required|valid_email');
    $this->form_validation->set_rules('password'  , 'Password'         , 'trim|required|min_length[6]');
    $this->form_validation->set_rules('confirm'   , 'Confirm Password' , 'trim|required|min_length[6]|matches[password]');

    if ($this->form_validation->run() == FALSE) {

			$this->load->view('prospects/new_record_head');
			$this->load->view('header');
			$this->load->view('Admin/Users/register_user');

			$this->load->view('footer2');
			$this->load->view('prospects/new_record_footer');

    } else {

        $this->load->model('Register_model');

        $result = $this->Register_model->register_user();

				if ($result) {
					$this->load->view('prospects/new_record_head');
					$this->load->view('header');
					$this->load->view('Admin/Users/register_user', array('first_name' => $result));

					$this->load->view('footer2');
					$this->load->view('prospects/new_record_footer');
				} else {

					echo 'Sorry, there was a problem when inserting user to database. Please contact lucas.berte@muv-u.com';

				}




    }

  }

}
