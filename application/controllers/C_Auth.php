<?php

class C_Auth extends CI_Controller
{
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('M_Auth');
		// if (!$this->M_Auth->is_login()) {
		// $this->load->view('V_Auth/login');
		// }
	}
	public function login()
	{
		$output = $this->M_Auth->do_login();
		$this->load->view('V_Auth/login', ['output' => $output]);
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
}
