<?php

class C_Category extends CI_Controller
{
	public  function __construct()
	{
		parent::__construct();
		$this->load->model('M_Category');
		$this->load->model('M_Product');
	}
	public function index()
	{
		$data['title'] = 'Halaman Kategori';
		$data['kategori'] = $this->M_Category->getAllData();
		$this->load->view('Templates/header', $data);
		$this->load->view('V_Category/index', $data);
		$this->load->view('Templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Form Tambah Kategori';
		$data['kategori'] = $this->M_Category->getAllData();
		$this->form_validation->set_rules('namakategori', 'Nama Kategori', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $data);
			$this->load->view('V_Category/create', $data);
			$this->load->view('Templates/footer');
		} else {
			$this->M_Category->store();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('C_Category');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Form Edit Kategori';
		$data['kategori'] = $this->M_Category->getDataById($id);
		$this->form_validation->set_rules('namakategori', 'Nama Kategori', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Templates/header', $data);
			$this->load->view('V_Category/edit', $data);
			$this->load->view('Templates/footer');
		} else {
			$this->M_Category->update();
			$this->session->set_flashdata('flash', 'Diperbarui');
			redirect('C_Category');
		}
	}

	public function delete($id)
	{
		$kat = $this->M_Product->hapusKategori($id);

		if (!empty($kat)) {
			$this->session->set_flashdata('hapus', 'Kategori sedang digunakan');
			redirect('C_Category');
		} else {
			$this->M_Category->destroy($id);
			$this->session->set_flashdata('flash', 'Dihapus');
			redirect('C_Category');
		}
	}
}
