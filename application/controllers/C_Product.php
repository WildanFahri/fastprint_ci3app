<?php

class C_Product extends CI_Controller
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
		$data['title'] = 'Halaman Produk';
		$data['produk'] = $this->M_Product->getAllData();
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Product/index', $data);
		$this->load->view('Templates/footer');
	}

	public function show($id)
	{
		$data['title'] = 'Halaman Detail Produk';
		$data['produk'] = $this->M_Product->getDataByIdUsr($id);
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Product/detail', $data);
		$this->load->view('Templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Form Tambah Produk';
		$data['kategori'] = $this->M_Category->getAllData();
		$data['status'] = $this->M_Status->getAllData();
		// $this->form_validation->set_rules('no', 'Nomor Produk', 'required|numeric');
		$this->form_validation->set_rules('namaproduk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
		// $this->form_validation->set_rules('kategori', 'Kategori', 'required');
		// $this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $data);
			$this->load->view('V_Product/create', $data);
			$this->load->view('Templates/footer');
		} else {
			$this->M_Product->store();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('C_Product');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Form Edit Produk';
		$data['produk'] = $this->M_Product->getDataById($id);
		$data['kategori'] = $this->M_Category->getAllData();
		$data['status'] = $this->M_Status->getAllData();
		// $this->form_validation->set_rules('no', 'Nomor Produk', 'required|numeric');
		$this->form_validation->set_rules('namaproduk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required|numeric');
		// $this->form_validation->set_rules('kategori', 'Kategori', 'required');
		// $this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $data);
			$this->load->view('V_Product/edit', $data);
			$this->load->view('Templates/footer');
		} else {
			$this->M_Product->update();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('C_Product');
		}
	}

	public function delete($id)
	{
		$this->M_Product->destroy($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('C_Product');
	}
}
