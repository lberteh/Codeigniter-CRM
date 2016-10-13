<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Super_controller {

	public function __construct() {

		parent::__construct();

			if($this->session->userdata('admin') == 0) {

				redirect('Prospects');

			}

	}

	public function index()
	{

		$startDate = $this->input->post('dStart');
		$endDate   = $this->input->post('dEnd');

		$data['columns'] = $this->Reports_model->table_report($startDate, $endDate);
		$data['chart'] = $this->Reports_model->chart1();

		$this->load->view('Admin/admin_head');
		$this->load->view('header');
		$this->load->view('Admin/ajax_view', $data);
		$this->load->view('quick_sidebar'); // under construction
		$this->load->view('footer2');
		$this->load->view('Admin/ajax_footer');

	}

	public function ajax_get_data() {

		$startDate = $this->input->post('dStart');
		$endDate   = $this->input->post('dEnd');

		$report = $this->Reports_model->the_report($startDate, $endDate);

		if ($report->num_rows() > 0) {

			$report_html = '
							<thead>
									<tr>
											<th>
											</th>
											<th class="all">Name</th>
											<th class="min-phone-l">Calls</th>
											<th class="min-phone-1">Walk Ins</th>
											<th class="desktop">Total Prospects</th>
											<th class="desktop">Appointmets Booked</th>
											<th class="min-tablet">Completed Presentations</th>
											<th class="desktop">Follow Up Presentations</th>
											<th class="all">CLOSED SALES</th>
											<th class="all">Closed Sales RATIO</th>
									</tr>
							</thead>
							<tbody >';


			foreach ($report->result() as $key) {

				$report_html .= '<tr><td></td>';
				$report_html .= '<td>' . $key->name . '</td>';
				$report_html .= '<td>' . $key->calls . '</td>';
				$report_html .= '<td>' . $key->walkins . '</td>';
				$report_html .= '<td>' . $key->tprospects . '</td>';
				$report_html .= '<td>' . $key->appointments . '</td>';
				$report_html .= '<td>' . $key->presentations . '</td>';
				$report_html .= '<td>' . $key->followUpPres . '</td>';
				$report_html .= '<td>' . $key->sales . '</td>';

				if ($key->presentations != 0) {
	 				$test =	round(($key->sales / $key->presentations)*100, 2);
	 			} else {
	 				$test = "0";
	 			};

				$report_html .= '<td>' . $test . ' %</td>';
				$report_html .= '</tr>';
			}

				$report_html .= '	</tbody>';

			$result = array('status' => 'ok', 'content' => $report_html);

		 	echo json_encode($result);

		} else {

			echo "nope";

		}

	}

	public function ajax_chart1() {

		$report = $this->Reports_model->chart1();

	  echo json_encode($report);


	}

	public function ajx_chart1() {

		$startDate = $this->input->post('dStart');
		$endDate   = $this->input->post('dEnd');

		$report = $this->Reports_model->ajx_chart1($startDate, $endDate);

	  echo json_encode($report);


	}



}
