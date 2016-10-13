<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{


    $this->load->view('test_view');

	}

	public function pipeline() {

		$this->load->model('test_model');
		$data['results'] = $this->test_model->get_stuff();

		$this->load->view('header');
		$this->load->view('test_view', $data);

	}

	public function closed_ratio() {

		$this->load->model('test_model');
		$data['results'] = $this->test_model->get_stuff();

		$this->load->view('header');
		$this->load->view('closed_sales_ratio', $data);

	}

	public function top_sellers() {

		$this->load->model('test_model');
		// $data['results'] = $this->test_model->get_top_sellers();
		$data['results'] = $this->test_model->tester();

//		$color = array('1' => 'silver',
//                   '2' => 'gold',
//                   '3' => 'blue'
//                  );


		$this->load->view('header');
		$this->load->view('top_seller', $data);

	}

	public function tester() {

		$this->load->model('test_model');
		$data['results'] = $this->test_model->tester();

	//	$this->load->view('header');
	//	$this->load->view('closed_sales_ratio', $data);

	}

}
