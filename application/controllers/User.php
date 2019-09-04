<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		$data = array(
			'title' 	=>		'Dashboard Administrator',
			'content' =>		'pages/vUser' 	
		);


		$this->load->view('layout/wrapper', $data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */