<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
	}

	public function index()
	{
		$data = array(
			'title' 	=>		'Dashboard Administrator',
			'content' =>		'pages/vDashboard' 	
		);


		$this->load->view('layout/wrapper', $data);

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */