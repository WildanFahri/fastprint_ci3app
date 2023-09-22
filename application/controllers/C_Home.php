<?php

class C_Home extends CI_Controller
{
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product');
		$this->load->model('M_Category');
		$this->load->model('M_Status');
	}
	public function index()
	{
		$data['title'] = 'Halaman Home';
		$data['produk'] = $this->M_Product->getData();
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Home/index', $data);
		$this->load->view('Templates/footer');
	}
}
