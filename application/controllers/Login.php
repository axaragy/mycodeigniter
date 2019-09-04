<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' 	=>		'Dashboard Administrator',
			'content' =>		'pages/vDashboard' 	
		);


		$this->load->view('pages/vLogin', $data);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */