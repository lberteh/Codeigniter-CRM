<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{

		if($this->session->userdata('logged_in')) {

			$this->load->view('header');
			$this->load->view('main_view');
			$this->load->view('footer');

		} else {

			redirect('Login');

		}

	}

	public function add_record() {

		$this->form_validation->set_rules('b_name'     , 'Lead'             , 'trim|required|min_length[2]');
    $this->form_validation->set_rules('entry_date' , 'Date'             , 'required');

    if ($this->form_validation->run() == FALSE) {

			$error = array(

				'errors' => validation_errors()

			);

			$this->session->set_flashdata($error);
			redirect('main');

    } else {

			$this->Main_model->send_record();

		}

	}


  function get_businesses()
	{

    if (isset($_GET['term'])){

      $q = strtolower($_GET['term']);
      $this->Main_model->get_business($q);

    }
  }

}
