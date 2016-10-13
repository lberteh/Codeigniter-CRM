<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_prospect extends CI_Controller {

	public function index()
	{
		$this->load->view('new_prospect_view');
	}
}
