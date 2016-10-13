<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prospects extends Super_controller {

	public function index()
	{


    $data['records'] = $this->Prospects_model->get_records();

		$this->load->view('prospects/prospects_head');
		$this->load->view('header');
		$this->load->view('prospects/index2', $data);
		$this->load->view('quick_sidebar'); // under construction
		$this->load->view('footer2');
		$this->load->view('prospects/prospects_footer');

	}

	public function dyn()
	{

		$this->load->view('dynamic_select');

	}


	public function new_prospect() {

		$this->load->view('prospects/new_record_head');
		$this->load->view('header');
		$this->load->view('prospects/new_prospect_view');
		$this->load->view('quick_sidebar'); // under construction
		$this->load->view('footer2');
		$this->load->view('prospects/new_record_footer');

	}

	public function new_record($b_id) {


		$data['records']  = $this->Prospects_model->get_entries($b_id);

		$data['business'] = $this->Prospects_model->get_business($b_id);

		// $data['outcome']  = $this->Prospects_model->get_next_step($b_id);

		$to_step = $this->Prospects_model->get_next_step($b_id)->to_step;

		$data['actions']  = $this->Prospects_model->get_actions($to_step);

		// $this->load->view('prospects/new_record_view2', $data);

		$this->load->view('prospects/new_record_head');
		$this->load->view('header');
		$this->load->view('prospects/new_record_view2', $data);
		$this->load->view('quick_sidebar'); // under construction
		$this->load->view('footer2');
		$this->load->view('prospects/new_record_footer');

	}

  public function add_new_prospect() {

    $this->form_validation->set_rules('b_name'     , 'Business'         , 'trim|required|min_length[2]');
    $this->form_validation->set_rules('entry_date' , 'Date'             , 'required');

    if ($this->form_validation->run() == FALSE) {

			$error = array(

				'errors' => validation_errors()

			);

			$this->session->set_flashdata($error);
			redirect('#');

    } else {

			$this->Prospects_model->add_prospect();

		}

	}

	public function add_new_record() {

		$this->form_validation->set_rules('b_name'     , 'Business'         , 'trim|required|min_length[2]');
		$this->form_validation->set_rules('entry_date' , 'Date'             , 'required');

		if ($this->form_validation->run() == FALSE) {

			$error = array(

				'errors' => validation_errors()

			);

			$this->session->set_flashdata($error);
			redirect('#');

		} else {

			$this->Prospects_model->add_record();

		}

	}

	public function outcomes() {

		$query = $this->Prospects_model->get_all_outs_count();

		foreach ($query as $row)
	  {
			if($row->type_id == '3') {
			 echo $row->outcome . ' = ' . $row->totals;
			 echo '<br>';
			}
	  }

		 $query = $this->Prospects_model->get_walk_ins_outs();

		 foreach ($query as $row)
		{
			if($row->outcome == 'No Interest') {
				echo $row->outcome . ' = ' . $row->totals;
				echo '<br>';
			}


		}

		}

		public function maoe() {

				$this->load->view('table');

		}


  }
