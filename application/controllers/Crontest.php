<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crontest extends CI_Controller {

	public function index()
	{

		$red = 'red';

		$query_str = 'UPDATE tasks SET status = ? WHERE due_date < CURDATE();';
		$this->db->query($query_str, array($red));

	}
}
