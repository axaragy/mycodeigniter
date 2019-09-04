<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' 	=>		'Dashboard Administrator',
			'content' 	=>		'pages/vBlank' 	
		);


		$this->load->view('layout/wrapper', $data);	
	}

}

/* End of file Blank.php */
/* Location: ./application/controllers/Blank.php */